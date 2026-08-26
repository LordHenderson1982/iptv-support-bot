<?php
/**
 * FAQ Data for IPTV Support Helper Bot
 * Add/edit questions and answers here
 */

return array(
    // === PAYMENT ===
    array(
        'category' => 'payment',
        'title' => 'How do I pay?',
        'preview' => 'We accept Bitcoin, PayPal, CashApp, Venmo',
        'answer' => "💳 *How to Pay*\n\nWe accept:\n• Bitcoin\n• PayPal\n• CashApp\n• Venmo\n\nMessage @savagestreamstv to get payment details.",
        'keywords' => array('pay', 'payment', 'buy', 'bitcoin', 'btc', 'paypal', 'cashapp', 'venmo', 'how to pay')
    ),
    array(
        'category' => 'payment',
        'title' => 'Add funds to account',
        'preview' => 'Use Add Funds in client area',
        'answer' => "💰 *Adding Funds*\n\n1. Log into your client area\n2. Go to 'Add Funds'\n3. Enter amount and pay\n4. Credit added automatically\n\nLink: https://veilhosts.shop/plans/clientarea.php?action=addfunds",
        'keywords' => array('add funds', 'credit', 'top up', 'balance')
    ),
    array(
        'category' => 'payment',
        'title' => 'Refund policy',
        'preview' => 'We do not offer refunds',
        'answer' => "❌ *Refunds*\n\nWe do not offer refunds on any services. Please make sure you test the service before committing to a subscription.",
        'keywords' => array('refund', 'money back', 'cancel')
    ),
    
    // === SETUP ===
    array(
        'category' => 'setup',
        'title' => 'How to setup on Firestick',
        'preview' => 'Download app and login',
        'answer' => "📱 *Firestick Setup*\n\n1. Go to 'Add Funds' in your client area\n2. Buy a subscription\n3. Download 'VeilHosts' app from our website or Downloader\n4. Open app, login with your credentials\n5. Enjoy!",
        'keywords' => array('firestick', 'firetv', 'amazon', 'stick', 'setup', 'install', 'app')
    ),
    array(
        'category' => 'setup',
        'title' => 'How to setup on Android TV',
        'preview' => 'Download APK or use Play Store',
        'answer' => "📱 *Android TV Setup*\n\n1. Go to 'Add Funds' in client area\n2. Buy subscription\n3. Download our APK or search 'VeilHosts' in Play Store\n4. Install, login, watch!",
        'keywords' => array('android', 'tv', 'apk', 'smart tv', 'setup', 'install')
    ),
    array(
        'category' => 'setup',
        'title' => 'M3U Playlist URL',
        'preview' => 'Get your M3U link',
        'answer' => "📋 *M3U List*\n\nYour M3U URL is in your client area:\n1. Login at veilhosts.shop/plans\n2. Go to 'Services'\n3. Click on your subscription\n4. Copy the M3U URL\n\nUse any M3U-compatible player.",
        'keywords' => array('m3u', 'playlist', 'url', 'link', 'download')
    ),
    array(
        'category' => 'setup',
        'title' => 'Portal URL',
        'preview' => 'Get your portal/mag URL',
        'answer' => "🔮 *Portal/MAG Setup*\n\nYour portal URL:\n1. Login at veilhosts.shop/plans\n2. Go to 'Services' \n3. Click on subscription\n4. Copy Portal URL\n\nEnter in your MAG device settings.",
        'keywords' => array('portal', 'mag', 'server', 'url')
    ),
    array(
        'category' => 'setup',
        'title' => 'Login not working',
        'preview' => 'Check username and password',
        'answer' => "🔐 *Login Issues*\n\n1. Check you're using the right username from your welcome email\n2. Make sure subscription is active (check 'Services' in client area)\n3. Try resetting password in client area\n4. If still issues, message @savagestreamstv",
        'keywords' => array('login', 'password', 'cant login', 'not working', 'username')
    ),
    
    // === ISSUES ===
    array(
        'category' => 'issues',
        'title' => 'Buffering issues',
        'preview' => 'Try these fixes',
        'answer' => "🛑 *Buffering Fixes*\n\n1. Lower stream quality (720p instead of 1080p)\n2. Use wired internet, not WiFi\n3. Close other apps using internet\n4. Reboot your device\n5. Try a different channel\n\nIf still buffering, message @savagestreamstv",
        'keywords' => array('buffer', 'buffering', 'slow', 'lag', 'loading')
    ),
    array(
        'category' => 'issues',
        'title' => 'Channels not working',
        'preview' => 'Try these steps',
        'answer' => "📡 *Channels Not Working*\n\n1. Try a different channel\n2. Reboot your device\n3. Check if it's a general outage - message @savagestreamstv\n4. Clear app cache and relogin\n\nMost issues fix with a reboot!",
        'keywords' => array('channel', 'not working', 'down', 'offline', 'error', 'black screen')
    ),
    array(
        'category' => 'issues',
        'title' => 'Service is down',
        'preview' => 'Check if we know about it',
        'answer' => "⚠️ *Service Down?*\n\nMessage @savagestreamstv to report. Include:\n• What device you're using\n• Which channel isn't working\n• Any error messages\n\nWe'll check and get back to you!",
        'keywords' => array('down', 'offline', 'service down', 'not working')
    ),
    array(
        'category' => 'issues',
        'title' => 'No streams available',
        'preview' => 'Check your subscription',
        'answer' => "📺 *No Streams Available*\n\n1. Check 'Services' in client area - is your subscription active?\n2. Check the expiry date\n3. Make sure you have credits/funds\n4. Try logging out and back in\n\nIf expired, renew in client area!",
        'keywords' => array('no streams', 'expired', 'expire', 'renew')
    ),
    
    // === ACCOUNT ===
    array(
        'category' => 'account',
        'title' => 'How to renew',
        'preview' => 'Renew in client area',
        'answer' => "🔄 *Renewing*\n\n1. Login at https://veilhosts.shop/plans\n2. Go to 'Services'\n3. Click on your subscription\n4. Click 'Renew'\n\nOr add funds and we'll auto-renew!",
        'keywords' => array('renew', 'renewal', 'extend', '续费')
    ),
    array(
        'category' => 'account',
        'title' => 'Reset password',
        'preview' => 'Use client area',
        'answer' => "🔐 *Reset Password*\n\n1. Go to https://veilhosts.shop/plans/clientarea.php\n2. Click 'Forgot Password'\n3. Enter your email\n4. Check email for reset link\n\nOr message @savagestreamstv for help",
        'keywords' => array('password', 'reset', 'forgot', 'change')
    ),
    array(
        'category' => 'account',
        'title' => 'Where to find my login details',
        'preview' => 'Check your welcome email',
        'answer' => "📧 *Login Details*\n\nYour login details were sent in your welcome email. Check your inbox!\n\nIf you can't find it:\n1. Go to https://veilhosts.shop/plans\n2. Click 'Forgot Password'\n3. Enter your email to reset",
        'keywords' => array('login details', 'credentials', 'welcome email', 'username')
    ),
    
    // === GENERAL ===
    array(
        'category' => 'general',
        'title' => 'Contact support',
        'preview' => 'Message us on Telegram',
        'answer' => "📞 *Contact Support*\n\nMessage @savagestreamstv on Telegram for help!\n\nInclude:\n• Your email\n• Issue description\n• Device type",
        'keywords' => array('contact', 'support', 'help', 'telegram', 'chat', 'message')
    ),
);
