<?php
/**
 * IPTV Support Helper Bot
 * 
 * Lives in your Telegram group, answers common questions
 * 
 * Setup:
 * 1. Create bot via @BotFather
 * 2. Add bot to your group
 * 3. Set webhook: https://api.telegram.org/bot<TOKEN>/setWebhook?url=<YOUR_URL>
 * 4. Edit faq.php to add your questions/answers
 */

$botToken = 'YOUR_BOT_TOKEN_HERE'; // Replace with your bot token
$adminId = '572118258'; // Your Telegram ID for admin alerts
$groupId = '-100XXXXXXXXX'; // Your group chat ID

// Load FAQ data
$faq = include 'faq.php';

// Get update from Telegram
$update = json_decode(file_get_contents('php://input'), true);

if (!$update) {
    exit('OK');
}

// Handle callback queries (button presses)
if (isset($update['callback_query'])) {
    handleCallback($update['callback_query'], $botToken, $faq);
    exit;
}

// Handle regular messages
if (isset($update['message'])) {
    $msg = $update['message'];
    $chatId = $msg['chat']['id'];
    $userId = $msg['from']['id'];
    $text = $msg['text'] ?? '';
    $firstName = $msg['from']['first_name'] ?? '';
    
    // Only respond in group chats
    if ($chatId != $groupId) {
        exit;
    }
    
    // Check if bot was mentioned or it's a reply to bot
    $isReply = isset($msg['reply_to_message']) && ($msg['reply_to_message']['from']['is_bot'] ?? false);
    $mentioned = isset($msg['entities']) ? array_filter($msg['entities'], function($e) { return $e['type'] === 'mention'; }) : [];
    
    // Respond to questions
    if (!empty($text) && ($isReply || !empty($mentioned) || strpos(strtolower($text), 'help') !== false || strpos(strtolower($text), '?') !== false)) {
        $answer = findBestAnswer($text, $faq);
        if ($answer) {
            sendMessage($chatId, $answer, $botToken);
        }
    }
}

/**
 * Find best matching answer based on keywords
 */
function findBestAnswer($text, $faq) {
    $text = strtolower($text);
    $bestMatch = null;
    $bestScore = 0;
    
    foreach ($faq as $item) {
        $score = 0;
        foreach ($item['keywords'] as $keyword) {
            if (strpos($text, strtolower($keyword)) !== false) {
                $score++;
            }
        }
        if ($score > $bestScore) {
            $bestScore = $score;
            $bestMatch = $item['answer'];
        }
    }
    
    // Only return if we have a decent match
    return ($bestScore > 0) ? $bestMatch : null;
}

/**
 * Handle callback queries
 */
function handleCallback($callback, $botToken, $faq) {
    $callbackId = $callback['id'];
    $data = $callback['data'] ?? '';
    
    // Answer immediately
    $url = "https://api.telegram.org/bot{$botToken}/answerCallbackQuery";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array('callback_query_id' => $callbackId));
    curl_exec($ch);
    curl_close($ch);
    
    // Handle category selection
    if (strpos($data, 'cat_') === 0) {
        $catId = str_replace('cat_', '', $data);
        showCategory($callback['message']['chat']['id'], $catId, $callback['from']['id'], $botToken, $faq);
    } elseif ($data === 'main_menu') {
        showMainMenu($callback['message']['chat']['id'], $callback['from']['id'], $botToken, $faq);
    }
}

/**
 * Show main menu
 */
function showMainMenu($chatId, $userId, $botToken, $faq) {
    // Group categories by section
    $categories = array(
        'payment' => array('icon' => '💳', 'name' => 'Payments', 'keywords' => array('pay', 'bitcoin', 'paypal', 'cashapp', 'venmo', 'buy', 'credit')),
        'setup' => array('icon' => '📱', 'name' => 'Setup', 'keywords' => array('setup', 'install', 'how to', 'm3u', 'portal', 'login', 'app')),
        'issues' => array('icon' => '🔧', 'name' => 'Problems', 'keywords' => array('buffer', 'not working', 'error', 'slow', 'down', 'offline')),
        'account' => array('icon' => '👤', 'name' => 'Account', 'keywords' => array('account', 'login', 'password', 'renew', 'cancel')),
    );
    
    $text = "📚 *How can I help?*\n\n";
    foreach ($categories as $key => $cat) {
        $text .= "{$cat['icon']} {$cat['name']}\n";
    }
    
    $keyboard = array();
    foreach (array_keys($categories) as $i => $catKey) {
        $keyboard[] = array(array('text' => $categories[$catKey]['icon'] . ' ' . $categories[$catKey]['name'], 'callback_data' => 'cat_' . $catKey));
    }
    
    sendKeyboard($chatId, $text, $keyboard, $botToken);
}

/**
 * Show category
 */
function showCategory($chatId, $catKey, $userId, $botToken, $faq) {
    $catAnswers = array_filter($faq, function($item) use ($catKey) {
        return $item['category'] === $catKey;
    });
    
    if (empty($catAnswers)) {
        sendMessage($chatId, "No articles in this category yet.", $botToken);
        return;
    }
    
    $text = "📖 *Articles:*\n\n";
    $keyboard = array();
    
    foreach ($catAnswers as $article) {
        $text .= "📄 *{$article['title']}*\n{$article['preview']}\n\n";
    }
    
    $keyboard[] = array(array('text' => '🔙 Back to Menu', 'callback_data' => 'main_menu'));
    sendKeyboard($chatId, $text, $keyboard, $botToken, true);
}

/**
 * Send message
 */
function sendMessage($chatId, $text, $botToken) {
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    $data = array(
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'Markdown'
    );
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

/**
 * Send keyboard message
 */
function sendKeyboard($chatId, $text, $keyboard, $botToken, $parseMarkdown = false) {
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    
    $inlineKeyboard = array();
    foreach ($keyboard as $row) {
        $inlineRow = array();
        foreach ($row as $button) {
            $inlineRow[] = array('text' => $button['text'], 'callback_data' => $button['callback_data']);
        }
        $inlineKeyboard[] = $inlineRow;
    }
    
    $data = array(
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => $parseMarkdown ? 'Markdown' : '',
        'reply_markup' => json_encode(array('inline_keyboard' => $inlineKeyboard))
    );
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}
