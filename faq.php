<?php
/**
 * FAQ - Edit your Q&A here
 * Simple format: just add new entries
 */

return array(
    // ============================================
    // ATTENTION - 🤖
    // ============================================
    'attention' => array(
        'title' => '🤖 Bot Commands',
        'keywords' => array('how do i use the bot', 'how does this work', 'what can you do', 'bot commands', 'bot menu', 'show menu', 'hey bot', 'hello bot', 'need help'),
        'answer' => "🤖 *Bot Commands*\n\nAsk me about:\n• How to pay\n• Login issues\n• Buffering problems\n• Channel issues\n• Setup help\n• Refunds\n• And more!\n\nJust describe your issue and I'll help!"
    ),
    
    // ============================================
    // ACCOUNT - 👤
    // ============================================
    'account' => array(
        'title' => '👤 Getting an Account',
        'keywords' => array('account', 'signup', 'register', 'new customer', 'join', 'how to join', 'create account'),
        'answer' => "👤 *Getting an Account*\n\nAll customers must have an account at veilhosts.shop\n\n1. Visit https://veilhosts.shop\n2. Click 'Register' to create an account\n3. Browse plans and purchase your subscription\n4. You'll receive login details within 24 hours"
    ),
    
    'login_issue' => array(
        'title' => '🔐 Login Problems',
        'keywords' => array('cant log in', 'cannot log in', 'cannot login', 'cant access', 'forgot password', 'forgot my password', 'lost password', 'password not working', 'wrong password', 'login details not working', 'locked out', 'account locked', 'where is my login', 'how do i login'),
        'answer' => "🔐 *Login Issues*\n\n1. Check your date of purchase and make sure you're not expired\n2. If you just ordered, it may take up to 24 hours to receive your account login details\n3. To fetch your login info:\n   • Go to veilhosts.shop\n   • Click 'Services'\n   • Click on your active service\n   • Your login details are there\n\nIf still having issues, ask in this group or open a ticket in your client area."
    ),
    
    // ============================================
    // PAYMENT - 💳
    // ============================================
    'how_to_pay' => array(
        'title' => '💳 How to Pay',
        'keywords' => array('how to pay', 'how do i pay', 'payment methods', 'accept bitcoin', 'can i pay with', 'buy subscription', 'where to pay', 'bitcoin payment', 'btc payment', 'crypto payment'),
        'answer' => "💳 *How to Pay*\n\n*On our website (veilhosts.shop):*\n• Bitcoin (BTC)\n• Bitcoin Cash (BCH)\n\n*For credits (use in client area):*\n• Credit/Debit card\n• Venmo\n• PayPal\n• Google Pay\n\n⚠️ *IMPORTANT - Bitcoin Payments:*\n• ALWAYS send the BTC amount shown on your invoice\n• Do NOT send the USD amount\n• The invoice shows the exact BTC to send — send that amount\n• Sending the wrong amount (USD instead of BTC) causes short payments\n\nVisit https://veilhosts.shop/plans to purchase!"
    ),
    
    'add_funds' => array(
        'title' => '💰 Add Funds / Credits (Shopify)',
        'keywords' => array('add funds', 'add credit', 'top up', 'buy credits', 'purchase credits', 'shopify credits', 'venmo payment', 'paypal payment', 'buy with venmo', 'buy with paypal', 'how to add funds', 'where to buy credits', 'buy credits'),
        'answer' => "💰 *Adding Credits via Shopify*\n\n*Now accepted:* Credit/Debit, PayPal, Venmo, Google Pay\n\n*Shopify Instructions:*\n\n1. Go to https://veilcreds.myshopify.com/password\n2. Click 'Enter Using Password'\n3. Enter password: *savage*\n4. Choose the product matching your desired credit amount\n5. Complete checkout\n\n⚠️ *IMPORTANT:* Use the SAME EMAIL as your veilhosts.shop account!\n\nWe have a webhook that automatically adds credits — it matches by email. If you use a different email, credits won't link to your account.\n\n*After payment:*\nCredits are automatically added to your veilhosts.shop account!\n\n⚠️ *Make sure to use the same email as your veilhosts.shop account.*"
    ),
    
    // ============================================
    // SETUP - 📱
    // ============================================
    'firestick' => array(
        'title' => '📱 Firestick Setup (Savage 4OUR)',
        'keywords' => array('firestick', 'fire tv', 'amazon firestick', 'fire stick', 'firestick setup', 'firestick install', 'firestick app', 'download firestick app', 'how to install on firestick', 'firestick iptv', 'savage 4our firestick', 'downloader code firestick')
        'answer' => "📱 *Firestick Setup - Savage 4OUR App*\n\n*Step 1:* Download the app\n1. Download 'Downloader' app from Amazon App Store\n2. Enable 'Install from unknown sources' in settings\n3. Open Downloader and enter code: *727397*\n4. Install Savage 4OUR\n\n*Step 2:* Configure\n1. Open Savage 4OUR app\n2. Enter your credentials:\n   - *Service Name:* e.g., 'Bones IPTV'\n   - *Username:* Your service username\n   - *Password:* Your service password\n3. Click login\n\n*Adding multiple services:*\n• Click 'Service name' in top right → 'Add Playlist'\n• Switch between services: Click 'Service name' → 'Switch Playlist'\n\n*Full guides:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/26/\n\nNeed help? Ask in this group!"
    ),
    
    'android' => array(
        'title' => '📱 Android TV Setup (Savage 4OUR)',
        'keywords' => array('android tv', 'android apk', 'android setup', 'android install', 'android iptv', 'android box', 'smart tv iptv', 'savage 4our android', 'download android app', 'how to install on android', 'android tv app', 'apk download')
        'answer' => "📱 *Android TV Setup - Savage 4OUR App*\n\n*Method 1 - Downloader (Recommended):*\n1. Download 'Downloader' app from Play Store\n2. Open Downloader and enter code: *727397*\n3. Install Savage 4OUR\n4. Open app, enter your credentials\n\n*Method 2 - Direct APK:*\n1. Download APK from veilhosts.shop\n2. Enable 'Install from unknown sources'\n3. Install and login with your credentials\n\n*Configure:*\n• Service Name: e.g., 'Bones IPTV'\n• Username: Your service username\n• Password: Your service password\n\n*Full guides:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/26/\n\nNeed help? Ask in this group!"
    ),
    
    'm3u' => array(
        'title' => '📋 M3U List',
        'keywords' => array('m3u', 'm3u playlist', 'm3u url', 'get m3u', 'download m3u', 'm3u link', 'playlist url', 'where is my m3u', 'how to get m3u')
        'answer' => "📋 *M3U List*\n\nTo get your M3U URL:\n1. Login at veilhosts.shop\n2. Go to 'Services'\n3. Click on your active subscription\n4. Copy the M3U URL\n\nUse any M3U-compatible player (IPTV Smarters, Perfect Player, etc.)"
    ),
    
    'portal' => array(
        'title' => '🔮 Portal URL',
        'keywords' => array('portal url', 'get portal', 'portal link', 'mag setup', 'mag box', 'stbemu', 'where is my portal', 'how to get portal url')
        'answer' => "🔮 *Portal/MAG Setup*\n\nTo get your Portal URL:\n1. Login at veilhosts.shop\n2. Go to 'Services'\n3. Click on your subscription\n4. Copy the Portal URL\n\nEnter this URL in your MAG device or STB Emulator settings."
    ),
    
    'setup_general' => array(
        'title' => '⚙️ General Setup Help',
        'keywords' => array('setup', 'configure', 'install', 'how to', 'getting started', 'begin', 'first time', 'quick start', 'guide'),
        'answer' => "⚙️ *General Setup Help*\n\n*Step 1:* Get your login credentials\n• Go to veilhosts.shop → Services → Your active service\n\n*Step 2:* Choose your setup method:\n\n📱 *App Method (Recommended - Savage 4OUR):*\n1. Download 'Downloader' app from App Store/Play Store\n2. Enable 'Install from unknown sources'\n3. Open Downloader, enter code: *727397*\n4. Install Savage 4OUR\n5. Open app, enter:\n   - Service Name: e.g., 'Bones IPTV'\n   - Username: Your service username\n   - Password: Your service password\n6. Add multiple services: Click 'Service name' → 'Add Playlist'\n\n🔮 *Portal Method:*\n• Get your portal URL from 'Services' in client area\n• Enter in your MAG device or STB Emulator\n\n📋 *M3U Method:*\n• Get your M3U URL from 'Services' in client area\n• Use with any M3U-compatible player\n\n*Full guides:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/26/\n\nStill stuck? Ask in this group with your device type!"
    ),

    // ============================================
    // SERVICES - 📺
    // ============================================
    'service_bones' => array(
        'title' => '📺 Bones IPTV',
        'keywords' => array('bones', 'bones iptv', 'bonesiptv', 'itchyanus', 'bones flix', 'bones smart tube', 'bones stremio', 'bones app', 'bones setup')
        'answer' => "📺 *Bones IPTV Setup*\n\n*Portal URL:* https://itchyanus.hair\n\n*App Setup (Savage 4OUR):*\n1. Download 'Downloader' app\n2. Enter code 727397 to install Savage TV 4OUR\n3. Service Name: Bones IPTV\n4. Username: Your Bones username\n5. Password: Your Bones password\n\n*Xtream API (Smarters Pro, TiviMate):*\n• Portal: https://itchyanus.hair\n• Username: Your Bones username\n• Password: Your Bones password\n\n*Bonus Apps for Bones users:*\n• Bones Flix — Code: 3144228\n• Bones Smart Tube — Code: 1527454\n• Bones Stremio — Code: 8052729\n\n*Full guide:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/21/\n\nNeed help? Ask in this group!"
    ),

    'service_savage_streams' => array(
        'title' => '📺 Savage Streams',
        'keywords' => array('savage streams', 'savage', 'savage streams', 'svg.pm', 'savagestreams', 'savage streams setup', 'savage ip tv')
        'answer' => "📺 *Savage Streams Setup*\n\n*Portal URL:* http://svg.pm:25461\n\n*App Setup (Savage 4OUR):*\n1. Download 'Downloader' app\n2. Enter code 727397 to install Savage TV 4OUR\n3. Service Name: Savage Streams\n4. Username: Your Savage Streams username\n5. Password: Your Savage Streams password\n\n*Xtream API (Smarters Pro, TiviMate):*\n• Portal: http://svg.pm:25461\n• Username: Your Savage Streams username\n• Password: Your Savage Streams password\n\n*Full guide:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/23/\n\nNeed help? Ask in this group!"
    ),

    'service_streamhub' => array(
        'title' => '📺 StreamHub IPTV',
        'keywords' => array('streamhub', 'stream hub', 'streamhubtv', 'streamhub iptv', 'mirror.streamhubtv.ca', 'streamhub setup')
        'answer' => "📺 *StreamHub IPTV Setup*\n\n*Portal URL:* https://mirror.streamhubtv.ca:443\n\n*App Setup (Savage 4OUR):*\n1. Download 'Downloader' app\n2. Enter code 727397 to install Savage TV 4OUR\n3. Service Name: StreamHub IPTV\n4. Username: Your StreamHub username\n5. Password: Your StreamHub password\n\n*Xtream API (Smarters Pro, TiviMate):*\n• Portal: https://mirror.streamhubtv.ca:443\n• Username: Your StreamHub username\n• Password: Your StreamHub password\n\n*Full guide:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/24/\n\nNeed help? Ask in this group!"
    ),

    'service_titanium' => array(
        'title' => '📺 Titanium VOD',
        'keywords' => array('titanium', 'titanium vod', 'titanium vod', 'jktvsupervod', 'rocktheusa', 'movies', 'series', 'titanium movies', 'titanium v o d')
        'answer' => "📺 *Titanium VOD Setup*\n\n*Portal URL:* https://rocktheusa.jktvsupervod.cc\n\n*Note:* Titanium VOD is MOVIES & SERIES only — no live TV!\n\n*App Setup (Savage 4OUR):*\n1. Download 'Downloader' app\n2. Enter code 727397 to install Savage TV 4OUR\n3. Service Name: Titanium VOD\n4. Username: Your Titanium username\n5. Password: Your Titanium password\n\n*Xtream API (Smarters Pro, TiviMate):*\n• Portal: https://rocktheusa.jktvsupervod.cc\n• Username: Your Titanium username\n• Password: Your Titanium password\n\n*Content:* 48,000+ movies, 11,000+ series, updated daily\n\n*Full guide:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/25/\n\nNeed help? Ask in this group!"
    ),

    'service_hot_player' => array(
        'title' => '📺 Hot IPTV Player',
        'keywords' => array('hot', 'hot player', 'hot iptv', 'hot player app', 'mac address', 'roku', 'lg tv', 'samsung tv', 'hot player setup', 'hot player mac')
        'answer' => "📺 *Hot IPTV Player Setup*\n\n*Important:* You must install the app BEFORE ordering!\n\n*Step 1: Install the app*\n• Android Mobile/TV/Fire TV: Download from Play Store/App Store, or use Downloader code: *395800*\n• Roku, LG TV, Samsung TV: Search 'Hot IPTV Player' in your TV's app store\n\n*Step 2: Get your MAC address*\n• Open the app\n• Note the MAC address shown on screen\n\n*Step 3: Order*\n• Add your MAC address to your order at veilhosts.shop\n• Add all existing usernames for services you want to use\n\n*Note:* One device per license.\n\n*Full guide:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/19/\n\nNeed help? Ask in this group!"
    ),

    'service_comparison' => array(
        'title' => '📊 Service Comparison',
        'keywords' => array('comparison', 'compare', 'which service', 'which one', 'difference', 'best', 'recommend', 'choose', 'which is better', 'service comparison', 'best service')
        'answer' => "📊 *Which Service Is Right For You?*\n\n*Quick Overview:*\n• *Bones IPTV* — 20,000+ channels + VOD, TV Catch Up, Bonus Apps\n• *Savage Streams* — 138,000+ channels, largest library\n• *StreamHub* — 69,000+ channels, best value\n• *Titanium VOD* — Movies & Series ONLY, updated daily\n\n*Choose Bones IPTV if:*\n• You want TV Catch Up (watch missed shows)\n• You want bonus apps & free VPNs\n• You need 4K live channels\n\n*Choose Savage Streams if:*\n• You want the largest library (138,000+)\n• You want full TV series collections\n\n*Choose StreamHub if:*\n• You want the best value for money\n• You want movies organized by genre\n\n*Choose Titanium VOD if:*\n• You ONLY want movies & series (no live TV)\n• You want fresh content updated DAILY\n• You want 48,000+ movies & 11,000+ series\n\n*Use ALL 4 services together!*\nAdd all services in Savage TV 4OUR app!\n\n*Full comparison:* https://veilhosts.shop/plans/index.php?rp=/knowledgebase/27/\n\nNeed help choosing? Ask in this group!"
    ),
    
    // ============================================
    // ISSUES - 🔧
    // ============================================
    'buffering' => array(
        'title' => '🛑 Buffering Fix',
        'keywords' => array('buffering', 'keeps buffering', 'buffering issues', 'video keeps stopping', 'streaming keeps buffering', 'stuttering', 'video stuttering', 'lag', 'video lag', 'slow streaming', 'video loading slow', 'freezing', 'video freezing', 'playback issues', 'streams keep stopping')
        'answer' => "🛑 *Buffering Fixes*\n\nTry these steps:\n1. *Restart your modem, router, and streaming device*\n2. *Run a speed test on your device* - make sure you have good internet\n3. *Try a VPN* - some ISPs throttle streaming\n4. Lower stream quality (720p instead of 1080p)\n5. Use wired ethernet instead of WiFi if possible\n6. Close other apps using your internet\n\nIf buffering persists, let us know what you've tried!"
    ),
    
    'channels_not_working' => array(
        'title' => '📡 Channels Not Working',
        'keywords' => array('channel not working', 'channel down', 'channel offline', 'channel error', 'channel black screen', 'no picture', 'specific channel not working', 'channel not showing', 'channel wont play', 'certain channel not working')
        'answer' => "📡 *Channels Not Working*\n\nTo report a specific channel or event issue, tell us:\n• Which service you're using (VeilHosts, etc.)\n• The category\n• The channel name/number\n\nWe'll investigate and fix it!\n\nGeneral tips:\n• Try a different channel\n• Reboot your device\n• Check if it's a general outage"
    ),
    
    'no_streams' => array(
        'title' => '📺 No Streams / Expired',
        'keywords' => array('no streams', 'no channels', 'expired', 'subscription expired', 'service expired', 'expire', 'renew', 'nothing working', 'cant watch', 'wont play', 'service not working')
        'answer' => "📺 *No Streams Available*\n\n1. Check 'Services' in your client area - is your subscription active?\n2. Check the expiry date\n3. Make sure you have credits/funds in your account\n4. Try logging out and back in\n\nIf expired, simply don't renew - your service will continue until the end of your paid period."
    ),
    
    // ============================================
    // RENEWAL - 🔄
    // ============================================
    'renew' => array(
        'title' => '🔄 How to Renew',
        'keywords' => array('renew', 'renewal', 'extend subscription', 'how to renew', 'renew my subscription', 'extend my subscription', 'more time', 'subscription renewal')
        'answer' => "🔄 *Renewing*\n\n1. Login at https://veilhosts.shop\n2. Go to 'Services'\n3. Click on your subscription\n4. Click 'Renew'\n\nOr add funds to your account and we'll auto-renew when your subscription ends!"
    ),
    
    'cancel' => array(
        'title' => '❌ Cancellation',
        'keywords' => array('cancel', 'cancellation', 'cancel subscription', 'how to cancel', 'stop service', 'end subscription', 'terminate', 'quit service', 'want to cancel')
        'answer' => "❌ *Cancellation*\n\nTo cancel simply don't renew!\n\nWe offer no refunds - your service will continue until the end of your paid period, then automatically stop."
    ),
    
    'refund' => array(
        'title' => '💸 Refund Policy',
        'keywords' => array('refund', 'money back', 'refund request', 'can i get refund', 'refund policy', 'return', 'reimbursement', 'want refund', 'return money')
        'answer' => "💸 *Refund Policy*\n\n*All sales are final.*\n\nWe do not offer refunds because we do not receive refunds for the service we provide from our upstream providers.\n\nTo cancel simply don't renew. Your service will continue until the end of your paid period."
    ),
    
    // ============================================
    // SUPPORT - 📞
    // ============================================
    'contact_support' => array(
        'title' => '📞 Contact Support',
        'keywords' => array('contact support', 'how to contact', 'reach support', 'open ticket', 'submit ticket', 'support ticket', 'need help', 'contact admin', 'message admin', 'telegram support')
        'answer' => "📞 *Contact Support*\n\nYou have two options:\n\n1. *Ask in this group* - post your question and we'll help!\n2. *Open a ticket* - go to your veilhosts.shop client area and submit a support ticket\n\nInclude your email and a description of your issue for faster help!"
    ),
    
    'login_details' => array(
        'title' => '📧 My Login Details',
        'keywords' => array('login details', 'my login credentials', 'where is my login', 'what is my username', 'what is my password', 'forgot login', 'welcome email', 'need my credentials', 'account credentials')
        'answer' => "📧 *Login Details*\n\nYour login details were sent in your welcome email. Check your inbox!\n\nIf you can't find it:\n1. Go to https://veilhosts.shop\n2. Click 'Forgot Password'\n3. Enter your email to reset\n\nOr fetch from client area: Services → Your Active Service"
    ),

    // ============================================
    // TECHNICAL - 💻
    // ============================================
    'internet_speed' => array(
        'title' => '📶 Internet Speed Requirements',
        'keywords' => array('internet speed', 'mbps', 'bandwidth', 'wifi issues', 'connection speed', 'slow internet', 'buffering speed', 'how fast internet', 'what speed do i need', 'minimum speed')
        'answer' => "📶 *Internet Speed Requirements*\n\n• *100 Mbps* — Plenty for everything\n• *25-50 Mbps* — Should work for most content\n\n*Tip:* A STABLE connection is more important than raw speed. Buffering is often caused by unstable connections, not slow ones.\n\nTry wired (Ethernet) instead of WiFi when possible!"
    ),

    'connections' => array(
        'title' => '🔢 How Many Connections?',
        'keywords' => array('connections', 'simultaneous', 'how many devices', 'multiple devices', 'can i use on multiple', 'how many streams', 'stream limit', 'device limit', 'at the same time')
        'answer' => "🔢 *Connections / Simultaneous Streams*\n\nIt depends on what you purchase!\n\nExample: If you buy 'Savage Streams 2 Connections', you can stream on 2 devices at the same time.\n\n*You can connect to as many devices as you want* — but only the number of connections you paid for can stream at once.\n\nCheck your plan details in your client area!"
    ),
    'devices_supported' => array(
        'title' => '📱 Supported Devices',
        'keywords' => array('supported devices', 'what devices', 'which devices', 'compatible devices', 'can i use on', 'works on', 'device compatibility', 'iphone', 'ipad', 'android phone', 'windows computer', 'mac computer', 'apple tv', 'smart tv')
        'answer' => "📱 *Supported Devices*\n\nWe support:\n• Android TV / Fire TV devices\n• Android Phone\n• iPhone / iPad\n• Windows PC / Mac\n• Apple TV\n• Smart TVs (via Smarters Pro or Hot Player)\n\n*Not supported:* MAG devices\n\nMost devices work with our Savage 4OUR app!"
    ),
    'mag_device' => array(
        'title' => '📺 MAG Device Setup',
        'keywords' => array('mag', 'mag box', 'mag device', 'stbemu', 'enigma', 'mag setup', 'mag box setup', 'can i use mag')
        'answer' => "📺 *MAG Device Setup*\n\n*We do not support MAG devices.*\n\nIf you have a MAG box, we'd recommend using Savage 4OUR app instead, or an M3U-compatible app.\n\nNeed help choosing an alternative? Ask in this group!"
    ),
    'kodi_setup' => array(
        'title' => '📺 Kodi Setup',
        'keywords' => array('kodi', 'kodi iptv', 'kodi setup', 'xbmc', 'iptv simple client', 'kodi plugin', 'install kodi')
        'answer' => "📺 *Kodi Setup*\n\n1. Install Kodi\n2. Go to Add-ons → My add-ons → PVR\n3. Enable IPTV Simple Client\n4. Configure with your M3U URL and EPG\n5. Restart Kodi\n\nYour M3U URL is in your client area under 'Services' → Your subscription.\n\nNeed help? Ask in this group!"
    ),
    'pc_mac_setup' => array(
        'title' => '💻 PC / Mac Setup',
        'keywords' => array('pc', 'mac', 'windows', 'computer', 'laptop', 'desktop'),
        'answer' => "💻 *PC / Mac Setup*\n\n*Smarters for Windows/Mac:*\n• Download from veilhosts.shop (we host it!)\n• Install and login with your credentials\n\nYour M3U URL: Client area → Services → Your subscription\n\nNeed help? Ask in this group!"
    ),
    'smart_tv_setup' => array(
        'title' => '📺 Smart TV Setup',
        'keywords' => array('smart tv', 'samsung', 'lg', 'sony', 'sharp', 'tizen', 'webos'),
        'answer' => "📺 *Smart TV Setup*\n\nSmart TVs need a 3rd party IPTV app.\n\n*Recommended:* **Hot IPTV Player**\n• Works on Samsung, LG, Roku, and more\n• We sell licenses - ask in this group!\n\n*Alternative:* Smarters Pro (but watch out for copycat apps)\n\n*Note:* Not all Smart TV apps work well — Hot Player is your safest bet!"
    ),
    'm3u_vs_portal' => array(
        'title' => '🔧 M3U vs Portal vs Xtream API',
        'keywords' => array('m3u', 'portal', 'xtream', 'api', 'difference', 'what is'),
        'answer' => "🔧 *M3U vs Portal vs Xtream API*\n\n*Don't worry — Savage 4OUR app handles all of this for you!*\n\n*M3U:* A file/link with your username/password included. Works but can be clunky.\n\n*Portal:* The login address for Xtream API (term originally for MAG devices)\n\n*Xtream API:* The modern method — cleaner and what Savage 4OUR uses.\n\n*Bottom line:* Use Savage 4OUR app and don't worry about the technical details!"
    ),
    'trial' => array(
        'title' => '🆓 Trial Period',
        'keywords' => array('trial', 'test', 'try', 'free', 'demo', 'free trial', 'test run', 'try before buy', 'can i try', 'is there a trial')
        'answer' => "🆓 *Trial Period*\n\n*I do not offer trials.*\n\nOur services are very affordable already and our reputation is stellar.\n\nCheck out our reviews and knowledgebase — we're confident you'll love the service!"
    ),
    'check_expiry' => array(
        'title' => '📅 Check Subscription Expiry',
        'keywords' => array('expiry', 'expiration', 'when does it expire', 'when does it end', 'how long left', 'check expiry', 'check expiration', 'subscription status', 'is my active', 'am i expired', 'expiry date')
        'answer' => "📅 *Check Subscription Expiry*\n\n*Method 1:* Check in your app\n• Most apps show expiry date in Settings\n\n*Method 2:* Do the math\n• If you bought '1 Month' and it's been a month + a day, you're probably expired\n\n*Method 3:* Check client area\n• Go to veilhosts.shop → Services → Your active service\n• See your activation date and expiry\n\nNeed help? Ask in this group!"
    ),
    'auto_renew' => array(
        'title' => '🔄 Auto-Renewal',
        'keywords' => array('auto renew', 'automatic renewal', 'auto renewal', 'recurring payment', 'will it auto renew', 'does it auto renew', 'invoice', 'renewal invoice')
        'answer' => "🔄 *Auto-Renewal*\n\nWe can't take automatic payments for Bitcoin (that's how it works with crypto).\n\n*How it works:*\n• We'll send you an invoice when your current service is about to end\n• The invoice lets you know it's time to renew\n• Simply pay the invoice to continue your service\n\n*Pro tip:* Add funds to your account and we can auto-renew when your subscription ends!"
    ),
    'report_down_channel' => array(
        'title' => '📡 Report Down Channel',
        'keywords' => array('report', 'report channel', 'channel down', 'report down', 'not working', 'fix channel', 'broken channel', 'channel broken', 'report issue')
        'answer' => "📡 *Report a Down Channel*\n\nJust ask in this group! Include:\n• Which service you're using (Bones IPTV, Savage Streams, etc.)\n• The category\n• The channel name\n\nWe'll investigate and fix it!"
    ),
    'pricing_negotiation' => array(
        'title' => '💰 Pricing / Discounts',
        'keywords' => array('discount', 'discounts', 'cheap', 'cheaper', 'price', 'negotiate', 'deal', 'better price', 'lower price', 'price negotiation', 'can i get discount', 'discount code')
        'answer' => "💰 *Pricing & Discounts*\n\nOur prices are already non-negotiable.\n\nWe operate on thin profit margins to give you the best value possible. Our prices are set competitively — no additional discounts available.\n\nThanks for understanding!"
    ),
    'subscription_expired' => array(
        'title' => '❌ When Subscription Expires',
        'keywords' => array('expired', 'subscription expired', 'service expired', 'expire', 'end', 'stopped', 'no longer working', 'after expire', 'when expire', 'what happens when expire')
        'answer' => "❌ *What Happens When You Expire*\n\nWhen your subscription expires, you simply won't be able to stream content anymore.\n\nYour service will continue until the end of your paid period, then automatically stop.\n\nTo re-activate, just renew through your client area!"
    ),

    'countries' => array(
        'title' => '🌍 Available Countries / Channels',
        'keywords' => array('countries', 'which countries', 'what countries', 'usa channels', 'uk channels', 'canada channels', 'international channels', 'channel list', 'channel list by country')
        'answer' => "🌍 *Available Countries & Channels*\n\nWe have channels from:\n• USA (local networks, sports, entertainment)\n• UK\n• Canada\n• And many more countries!\n\n*Full channel list:* Check our knowledgebase for your specific service.\n\n👉 https://veilhosts.shop/plans/index.php?rp=/knowledgebase/7/Services-and-Setup"
    ),

    'live_tv_vs_vod' => array(
        'title' => '📺 Live TV vs VOD',
        'keywords' => array('live tv', 'live television', 'vod', 'video on demand', 'movies', 'shows', 'difference between', 'live vs vod', 'what is live tv', 'what is vod')
        'answer' => "📺 *Live TV vs VOD*\n\n*Live TV:*\n• Standard cable channels\n• Sports channels\n• PPV events\n• Watch as it happens\n• *Full channel lists:* Check our knowledgebase for your service\n\n*VOD (Video on Demand):*\n• Movies you can watch anytime\n• TV shows you can binge\n• Not scheduled — watch when you want\n\nMost services include both Live TV + VOD!"
    ),

    'tv_catchup' => array(
        'title' => '⏪ TV Catch Up',
        'keywords' => array('tv catchup', 'tv catch up', 'catchup', 'catch up tv', 'tivo', 'record', 'replay', 'watch later', 'watch missed', 'missed show', 'recordings')
        'answer' => "⏪ *TV Catch Up*\n\nTV Catch Up is like a built-in TiVO!\n\n• Records 1,000+ channels 24/7\n• Watch shows you missed after they've aired\n• Missed a Sunday football game? Watch it when you get home!\n\n*Available on:* Bones IPTV\n\n*Stores shows for up to 3 days!*\n\nNot available on Savage Streams, StreamHub, or Titanium VOD."
    ),

    'epg_guide' => array(
        'title' => '📺 EPG / TV Guide',
        'keywords' => array('epg', 'tv guide', 'program guide', 'epg guide', 'schedule', 'tv schedule', 'channel guide', 'program schedule')
        'answer' => "📺 *EPG / TV Guide*\n\nEPG is automatically built into Savage 4OUR — just login and it works!\n\n*Auto-updates* when you update your channels.\n\nWorks in most apps automatically after login."
    ),

    'vpn' => array(
        'title' => '🔐 Using a VPN',
        'keywords' => array('vpn', 'express vpn', 'nord vpn', 'proxy', 'privacy', 'use vpn', 'vpn issues', 'vpn problems', 'vpn not working')
        'answer' => "🔐 *Using a VPN*\n\n*Most VPNs are safe to use.*\n\n*Watch out for:* VPNs with dynamic IPs that constantly change (like ExpressVPN) — these can cause connection issues.\n\n*Pro tip:* If you're having login issues, try turning off your VPN first!"
    ),

    'legal' => array(
        'title' => '⚖️ Is It Legal?',
        'keywords' => array('legal', 'illegal', 'is it legal', 'law', 'frowned upon', 'risks', 'legal issues', 'is it safe', 'safe to use')
        'answer' => "⚖️ *Is It Legal?*\n\n*Depends on where you are.*\n\nFor the most part, these services are frowned upon. It's always best to be safe.\n\n*Pro tip:* You don't need to provide real info at veilhosts.shop — we accept Bitcoin!"
    ),

    'change_password' => array(
        'title' => '🔑 Change Password',
        'keywords' => array('change password', 'reset password', 'new password', 'password change', 'compromised', 'account hacked', 'hacked', 'reset my password')
        'answer' => "🔑 *Changing Your Password*\n\n*You cannot change your service password yourself* — passwords are auto-generated.\n\nIf your account was compromised, message @savagestreamstv or open a ticket and we can change it for you!"
    ),

    'update_app' => array(
        'title' => '🔄 How to Update Apps',
        'keywords' => array('update', 'updates', 'new version', 'upgrade', 'update app', 'update 4our', 'new app version', 'app update')
        'answer' => "🔄 *Updating Savage 4OUR*\n\n*Savage 4OUR never requires updates!*\n\nWhen we release new apps, they're *separate apps* to install fresh.\n\n*To get new apps:*\n• Use Downloader code *727397*\n• Install the new app alongside the old one\n\nYou'll always get the latest version when you install fresh!"
    ),

    'traveling' => array(
        'title' => '✈️ Using While Traveling',
        'keywords' => array('travel', 'traveling', 'abroad', 'overseas', 'outside country', 'vacation', 'other country', 'different country', 'using abroad')
        'answer' => "✈️ *Using While Traveling*\n\n*It's okay to use your service anywhere!*\n\nTake your streaming with you on vacation, business trips, or anywhere you go.\n\nJust make sure you have a good internet connection!"
    ),

    'audio_issues' => array(
        'title' => '🔊 Audio / Playback Issues',
        'keywords' => array('audio', 'sound', 'no sound', 'no audio', 'subtitles', 'playback', 'not playing', 'error', 'audio issues', 'sound issues', 'playback issues', 'movie not playing', 'wont play')
        'answer' => "🔊 *Audio / Playback Issues*\n\n*Live TV:*\nAudio issues are rare. If it happens, it's probably the channel itself — report it and we'll fix it!\n\n*VOD / Movies:*\nOlder titles sometimes won't play due to old audio types.\n\n*Fix:*\n1. Install VLC on your device\n2. In 4OUR, go to Settings\n3. Choose 'Add External Player'\n4. Add VLC\n5. Play movies/episodes in VLC instead\n\nThat should fix it!"
    ),

    'quality_sd_hd_4k' => array(
        'title' => '📺 Video Quality (SD vs HD vs 4K)',
        'keywords' => array('quality', 'sd', 'hd', 'fhd', '4k', 'uhd', 'resolution', 'pixel', 'video quality', 'hd quality', '4k streaming', 'hd streaming', 'picture quality')
        'answer' => "📺 *Video Quality*\n\n*SD:* Not supported much anymore — most have sufficient bandwidth\n\n*HD / FHD (1080p):* Most common, works great\n\n*4K:* Still struggles on some connections\n\n*Recommendation:* HD/FHD is the sweet spot for most users!"
    ),
);
