<?php
/**
 * In PHP, an array is a list of items.
 * We store our products here so we can update them in one place.
 */

// Navigation items matching Apple's top bar
$navItems = [
    ['title' => 'Store', 'url' => 'index.php'],
    ['title' => 'Mac', 'url' => 'category.php?category=mac'],
    ['title' => 'iPad', 'url' => 'category.php?category=ipad'],
    ['title' => 'iPhone', 'url' => 'category.php?category=iphone'],
    ['title' => 'Watch', 'url' => 'category.php?category=watch'],
    ['title' => 'AirPods', 'url' => 'category.php?category=airpods'],
    ['title' => 'Home', 'url' => 'category.php?category=home'],
    ['title' => 'Entertainment', 'url' => 'category.php?category=entertainment'],
    ['title' => 'Accessories', 'url' => 'category.php?category=accessories'],
    ['title' => 'Support', 'url' => 'category.php?category=support']
];

// Announcement banner
$announcement = [
    'highlight' => 'Get up to 12 months of No Cost EMI§ plus up to ₹15000.00 instant cashback^ on selected products with eligible cards.',
    'link_text' => 'See offers',
    'link_url' => '#offers'
];

// Product categories
$categories = [
    ['id' => 'mac',         'name' => 'Mac',         'url' => 'https://www.apple.com/in/shop/buy-mac',              'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-mac-nav-202603?wid=400&hei=260&fmt=png-alpha&.v=M1Q3OGxnb1lBaHhqNjZ2OVRXZmx4V2duSGVkdTVncGZYc0RnS1paU3IySCsrUlZaSVRoWVYzU0Qra0FoTmUwNng2bitObzZwQzk4cEorV1dZdzhIazAreDNWYWNLK1lESGRXY25VRzdWVTQ&traceId=1', 'alt' => 'Mac'],
    ['id' => 'iphone',      'name' => 'iPhone',      'url' => 'https://www.apple.com/in/shop/buy-iphone',          'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-iphone-nav-202609?wid=400&hei=260&fmt=png-alpha&.v=dW5XbHI1eDVpd01qWUU4bFRtWGZXMWdGVG1nbG0xL1p6dm9DRUFPZ0dweDVoZlhhY1p4QWdsTjFNaGRHM3FYWW15d1FhSDJ0bkR0ZGZtUjZJNmFveFRpdVN1Mm5aL2Jjb3FkdWtkdGZFdDA&traceId=1', 'alt' => 'iPhone'],
    ['id' => 'ipad',        'name' => 'iPad',        'url' => 'https://www.apple.com/in/shop/buy-ipad',            'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-ipad-nav-202405?wid=400&hei=260&fmt=png-alpha&.v=dW5XbHI1eDVpd01qWUU4bFRtWGZXNGFLQTJVNnlNQmQrVmRBYnZYei9jckUzelNmMnRxajE0NHhmMWtLazl6eG53M0FRZHBXNTh1U1lFVEtSR2YzTm5qbE56RWRpRFNIRXZvbkd2S0l5dTg&traceId=1', 'alt' => 'iPad'],
    ['id' => 'watch',       'name' => 'Apple Watch', 'url' => 'https://www.apple.com/in/shop/buy-watch',           'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-watch-nav-202609_GEO_IN?wid=400&hei=260&fmt=png-alpha&.v=S0tSVzBtSkRkSFFhMm1zS1NmeWtkeE9WMkZMMjB1Njd1c1lXRUh5b1BXRHZGQmhUaHlPN016cFdzNFJtZThkQ2M5THdmR1U4Nmp4b2NFbEg2N21UQzF5QkUwSkVON05iaGVIbmZDRTQ3Nk41MXNkclVCbC83Z3htd2ZETUxxazE&traceId=1', 'alt' => 'Apple Watch'],
    ['id' => 'home',        'name' => 'Home',        'url' => 'https://www.apple.com/in/shop/buy-home',            'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-home-nav-202610?wid=240&hei=156&fmt=png-alpha&.v=WVcvamRucHVMMWs5SXZ3bVJ3Q2hpY3pMQndCZkNPK0ZRT1NrSytBaGh3QkFNWWxIRnZ4YitGb1F5WisvNlFPWm53M0FRZHBXNTh1U1lFVEtSR2YzTnZvNGtsbnJxaytRaDg2QjhEaGNud3M&traceId=1', 'alt' => 'Apple Home products'],
    ['id' => 'airpods',     'name' => 'AirPods',     'url' => 'https://www.apple.com/in/airpods',                 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-airpods-nav-202509?wid=400&hei=260&fmt=png-alpha&.v=Q0Z1bWFqMUpRRnp3T0Y0VWJpdk1yMDhFUStvWHB3SDlDa3VrdUZORWRqeld1aTN5QlRYNG5PRjJxc2d1RklXbVM0TjRWdzF2UjRGVEY0c3dBQVZ6VGZUMjJQZFhhT2thWmkxZjhra3FyZEk&traceId=1', 'alt' => 'AirPods'],
    ['id' => 'airtag',      'name' => 'AirTag',      'url' => 'https://www.apple.com/in/shop/airtag/accessories/airtag', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-airtags-nav-202601_GEO_IN?wid=400&hei=260&fmt=png-alpha&.v=Q0Z1bWFqMUpRRnp3T0Y0VWJpdk1yL1FqZ2pobDV2bDUyWU1XVmNnMmx3UUdvUzdNVnRJWFZUbkZkSEFxU1M1YWlRT3o4dCtSOG5URzZBQk51WVJZNG1ZT05aMG1qOXJGam1odE5PQXNEK3hoZmhNRWMyTWI4VWg3NDM1QXBxeWs&traceId=1', 'alt' => 'AirTag'],
    ['id' => 'accessories', 'name' => 'Accessories', 'url' => 'https://www.apple.com/in/shop/accessories/all',    'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-13-accessories-nav-202609?wid=240&hei=156&fmt=png-alpha&.v=QnhsNk96S0o4R1dkN2FveStNM1hwNzZGMHVrNGw2NTM5Vmk2bHZzMXQ3andmemN3dmNHVFJjenRQYk1lUFpSRHcrNWczbnhVYSs0Zms4d0lUWlFkbkE0M0syUXJrTTZWZjNsYllxMC9vL09ZUU1YR1VFWnRxditwZEVpU1JYTGQ&traceId=1', 'alt' => 'Accessories']
];

$storeQuickLinks = [
    ['title' => 'Find a Store', 'url' => 'index.php#store'],
    ['title' => 'Order Status', 'url' => 'cart.php'],
    ['title' => 'Apple Trade In', 'url' => 'index.php#savings-and-offers'],
    ['title' => 'Ways to Buy', 'url' => 'index.php#savings-and-offers'],
    ['title' => 'Personal Setup', 'url' => 'index.php#store-difference'],
    ['title' => 'Festive Offer', 'url' => 'index.php#joy-starts-here']
];

$megaMenus = [
    'Mac' => [
        'category' => 'mac',
        'explore' => ['MacBook Neo', 'MacBook Air', 'MacBook Pro', 'iMac', 'Mac mini', 'Mac Studio', 'Displays', 'Compare Mac', 'Switch from PC to Mac'],
        'shop' => ['Shop Mac', 'Mac Accessories', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['Mac Support', 'AppleCare', 'macOS 27', 'Apple Intelligence and Siri', 'Apps by Apple', 'Apple Creator Studio', 'Better with iPhone', 'iCloud+', 'Mac for Business', 'Education', 'Apple at Work']
    ],
    'iPad' => [
        'category' => 'ipad',
        'explore' => ['iPad Pro', 'iPad Air', 'iPad', 'iPad mini', 'Apple Pencil', 'Keyboards', 'Compare iPad'],
        'shop' => ['Shop iPad', 'iPad Accessories', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['iPad Support', 'AppleCare', 'iPadOS 27', 'Apple Intelligence and Siri', 'Apps by Apple', 'Apple Creator Studio', 'iCloud+', 'Education', 'Apple at Work']
    ],
    'iPhone' => [
        'category' => 'iphone',
        'explore' => ['iPhone Duo', 'iPhone 18 Pro', 'iPhone Air', 'iPhone 17', 'iPhone 17e', 'iPhone 16', 'Compare iPhone', 'Switch from Android'],
        'shop' => ['Shop iPhone', 'iPhone Accessories', 'Apple Trade In', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['iPhone Support', 'AppleCare', 'iOS 27', 'Apple Intelligence and Siri', 'Apps by Apple', 'iPhone Privacy', 'Better with Mac', 'iCloud+', 'Wallet, Pay', 'Apple at Work']
    ],
    'Watch' => [
        'category' => 'watch',
        'explore' => ['Apple Watch Series 12', 'Apple Watch Ultra 4', 'Apple Watch SE 3', 'Apple Watch Nike', 'Compare Watch', 'Why Apple Watch'],
        'shop' => ['Shop Apple Watch', 'Apple Watch Straps', 'Apple Watch Accessories', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['Apple Watch Support', 'AppleCare', 'watchOS 27', 'Apple Watch For Your Kids', 'Apps by Apple', 'Apple Fitness+', 'Education']
    ],
    'AirPods' => [
        'category' => 'airpods',
        'explore' => ['AirPods 5', 'AirPods Pro 3', 'AirPods Max 2', 'Compare AirPods'],
        'shop' => ['Shop AirPods', 'Shop AirPods 5', 'Shop AirPods Pro 3', 'Shop AirPods Max 2', 'AirPods Accessories'],
        'more' => ['AirPods Support', 'AppleCare', 'Apple Music', 'Apple Fitness+']
    ],
    'Home' => [
        'category' => 'home',
        'explore' => ['Apple HomeView', 'Apple TV 4K', 'HomePod', 'HomePod mini 2'],
        'shop' => ['Shop Home', 'Shop Home Accessories', 'Personal Setup'],
        'more' => ['Apple TV Support', 'HomePod Support', 'AppleCare for Apple TV', 'AppleCare for HomePod', 'Apple TV app', 'Apple TV', 'Home app', 'Apple Music', 'AirPlay']
    ],
    'Entertainment' => [
        'category' => 'entertainment',
        'explore' => ['Apple TV', 'Apple Music', 'Apple Arcade', 'Apple Fitness+', 'Apple Podcasts', 'Apple Books', 'App Store'],
        'shop' => ['Explore Home', 'Apple TV 4K', 'HomePod'],
        'more' => ['Apple TV Support', 'Apple Music Support', 'Subscriptions', 'Apps by Apple']
    ],
    'Accessories' => [
        'category' => 'accessories',
        'explore' => ['Shop Accessories', 'Shop All Accessories', 'Mac', 'iPad', 'iPhone', 'Apple Watch', 'AirPods', 'Home'],
        'shop' => ['Explore Accessories', 'Made by Apple', 'Beats', 'AirTag'],
        'more' => ['Accessories Support', 'AppleCare', 'Ways to Buy']
    ],
    'Support' => [
        'category' => 'support',
        'explore' => ['iPhone', 'Mac', 'iPad', 'Watch', 'AirPods', 'Music', 'TV'],
        'shop' => ['Explore Support', 'Get Help', 'Helpful Topics', 'Community', 'Check Coverage', 'Genius Bar', 'Repair', 'Get AppleCare'],
        'more' => ['Apple Account and Password', 'Billing and Subscriptions', 'Accessibility']
    ]
];

// Original demo catalog content for each local category page.
$categoryPages = [
    'mac' => [
        'title' => 'Mac',
        'headline' => 'Find the Mac that fits your world.',
        'description' => 'Powerful laptops and desktops for work, creativity and everything in between.',
        'image' => 'images/mac.svg',
        'products' => [
            ['name' => 'MacBook Air', 'description' => 'Light, capable and ready to go wherever you do.', 'price' => 'From ₹99,900'],
            ['name' => 'MacBook Pro', 'description' => 'Serious performance for demanding projects.', 'price' => 'From ₹1,69,900'],
            ['name' => 'iMac', 'description' => 'A beautiful all-in-one desktop for your workspace.', 'price' => 'From ₹1,34,900']
        ]
    ],
    'iphone' => [
        'title' => 'iPhone',
        'headline' => 'A great iPhone for every day.',
        'description' => 'Explore distinctive designs, helpful features and cameras made for your moments.',
        'image' => 'images/phone-product.svg',
        'products' => [
            ['name' => 'iPhone Pro', 'description' => 'Advanced camera tools and powerful performance.', 'price' => 'From ₹1,19,900'],
            ['name' => 'iPhone', 'description' => 'A vibrant display and capable features for everyday use.', 'price' => 'From ₹79,900'],
            ['name' => 'iPhone essentials', 'description' => 'Find a model and finish that feels right for you.', 'price' => 'Explore available models']
        ]
    ],
    'ipad' => [
        'title' => 'iPad',
        'headline' => 'Your ideas, ready to take shape.',
        'description' => 'Meet versatile tablets for drawing, learning, creating and getting things done.',
        'image' => 'images/tablet-product.svg',
        'products' => [
            ['name' => 'iPad Pro', 'description' => 'A spacious canvas for ambitious projects.', 'price' => 'From ₹99,900'],
            ['name' => 'iPad Air', 'description' => 'A great balance of performance and portability.', 'price' => 'From ₹59,900'],
            ['name' => 'iPad mini', 'description' => 'A compact companion that goes anywhere.', 'price' => 'From ₹49,900']
        ]
    ],
    'watch' => [
        'title' => 'Apple Watch',
        'headline' => 'A little more connected to your day.',
        'description' => 'Explore watches designed to support your activity, health and everyday routines.',
        'image' => 'images/watch-product.svg',
        'products' => [
            ['name' => 'Watch Series', 'description' => 'Helpful everyday features in a versatile design.', 'price' => 'From ₹46,900'],
            ['name' => 'Watch Ultra', 'description' => 'Built for outdoor adventures and demanding days.', 'price' => 'From ₹89,900'],
            ['name' => 'Watch SE', 'description' => 'Core watch features for your daily essentials.', 'price' => 'From ₹24,900']
        ]
    ],
    'home' => [
        'title' => 'Home',
        'headline' => 'Make your home feel more like yours.',
        'description' => 'Discover simple ways to enjoy music, entertainment and connected spaces.',
        'image' => 'images/home.svg',
        'products' => [
            ['name' => 'HomePod', 'description' => 'Room-filling sound and a helpful home companion.', 'price' => 'From ₹32,900'],
            ['name' => 'HomePod mini', 'description' => 'Surprisingly rich sound in a compact design.', 'price' => 'From ₹10,900'],
            ['name' => 'Home accessories', 'description' => 'Explore useful additions for your connected home.', 'price' => 'Explore accessories']
        ]
    ],
    'airpods' => [
        'title' => 'AirPods',
        'headline' => 'Sound that goes with you.',
        'description' => 'Find wireless audio for focus, calls, music and all the moments between.',
        'image' => 'images/airpods.svg',
        'products' => [
            ['name' => 'AirPods Pro', 'description' => 'Immersive listening with a comfortable in-ear fit.', 'price' => 'From ₹24,900'],
            ['name' => 'AirPods', 'description' => 'Easy listening with a familiar open-ear design.', 'price' => 'From ₹19,900'],
            ['name' => 'Audio accessories', 'description' => 'Discover charging cases and everyday essentials.', 'price' => 'Explore accessories']
        ]
    ],
    'airtag' => [
        'title' => 'AirTag',
        'headline' => 'Keep track of the things you care about.',
        'description' => 'A small, simple way to help find everyday items through the Find My app.',
        'image' => 'images/airtag.svg',
        'products' => [
            ['name' => 'AirTag', 'description' => 'Add item tracking to keys, bags and more.', 'price' => 'From ₹3,490'],
            ['name' => 'AirTag 4-pack', 'description' => 'A convenient set for keeping track of more.', 'price' => 'From ₹11,900'],
            ['name' => 'AirTag accessories', 'description' => 'Choose a holder to keep your AirTag close.', 'price' => 'Explore accessories']
        ]
    ],
    'accessories' => [
        'title' => 'Accessories',
        'headline' => 'The details that make it yours.',
        'description' => 'Explore useful additions for your devices, workspace and everyday carry.',
        'image' => 'images/accessories.svg',
        'products' => [
            ['name' => 'Cases and protection', 'description' => 'Add a personal touch and everyday protection.', 'price' => 'Explore cases'],
            ['name' => 'Power and cables', 'description' => 'Keep your devices charged at home or on the go.', 'price' => 'Explore power'],
            ['name' => 'Audio and more', 'description' => 'Find accessories for listening, creating and working.', 'price' => 'Explore accessories']
        ]
    ],
    'entertainment' => [
        'title' => 'Entertainment',
        'headline' => 'Make more time for what you love.',
        'description' => 'Explore music, shows, games, podcasts and more across your devices.',
        'image' => 'images/home.svg',
        'products' => [
            ['name' => 'Apple TV', 'description' => 'Discover shows, films and entertainment at home.', 'price' => 'Explore Apple TV'],
            ['name' => 'Apple Music', 'description' => 'Find music, playlists and audio for every mood.', 'price' => 'Explore Apple Music'],
            ['name' => 'Apple Arcade', 'description' => 'Explore games to enjoy across your devices.', 'price' => 'Explore Apple Arcade']
        ]
    ],
    'support' => [
        'title' => 'Support',
        'headline' => 'Support for the things you use every day.',
        'description' => 'Find helpful resources for your devices, services and Apple account.',
        'image' => 'images/specialist.svg',
        'products' => [
            ['name' => 'Device support', 'description' => 'Find guidance for setting up and using your devices.', 'price' => 'Explore support'],
            ['name' => 'Repairs and coverage', 'description' => 'Learn about service, repairs and coverage options.', 'price' => 'Explore service'],
            ['name' => 'Account and billing', 'description' => 'Get help with your account, subscriptions and purchases.', 'price' => 'Get help']
        ]
    ]
];

$macLineup = [
    [
        'id' => 'macbook-neo',
        'name' => 'MacBook Neo',
        'badge' => '',
        'description' => 'A colourful, approachable Mac for everyday work, study and creativity.',
        'price' => '₹79,900',
        'monthly' => '₹6,075',
        'image' => 'images/macbook-neo.svg',
        'colors' => ['Silver', 'Blush', 'Citrus', 'Indigo'],
        'type' => 'laptop'
    ],
    [
        'id' => 'macbook-air',
        'name' => 'MacBook Air',
        'badge' => '',
        'description' => 'A thin, lightweight laptop made for work and life on the move.',
        'price' => '₹1,49,900',
        'monthly' => '₹11,658',
        'image' => 'images/macbook-air.svg',
        'colors' => ['Sky blue', 'Silver', 'Starlight', 'Midnight'],
        'type' => 'laptop'
    ],
    [
        'id' => 'macbook-pro',
        'name' => 'MacBook Pro',
        'badge' => '',
        'description' => 'A high-performance laptop for creative and professional workflows.',
        'price' => '₹2,39,900',
        'monthly' => '₹18,742',
        'image' => 'images/macbook-pro.svg',
        'colors' => ['Space black', 'Silver'],
        'type' => 'laptop'
    ],
    [
        'id' => 'imac',
        'name' => 'iMac',
        'badge' => '',
        'description' => 'A desktop computer with the display and computer together in one.',
        'price' => '₹1,74,900',
        'monthly' => '₹14,158',
        'image' => 'images/imac.svg',
        'colors' => ['Silver'],
        'type' => 'desktop'
    ],
    [
        'id' => 'mac-mini',
        'name' => 'Mac mini',
        'badge' => 'New',
        'description' => 'Compact desktop performance for a flexible workspace.',
        'price' => '₹99,900',
        'monthly' => '₹7,908',
        'image' => 'images/mac-mini.svg',
        'colors' => ['Silver'],
        'type' => 'desktop'
    ],
    [
        'id' => 'mac-studio',
        'name' => 'Mac Studio',
        'badge' => 'New',
        'description' => 'Powerful desktop performance for demanding creative work.',
        'price' => '₹2,79,900',
        'monthly' => '₹22,492',
        'image' => 'images/mac-studio.svg',
        'colors' => ['Silver'],
        'type' => 'desktop'
    ],
    [
        'id' => 'studio-display',
        'name' => 'Studio Display',
        'badge' => '',
        'description' => 'A high-resolution display designed for a detailed workspace.',
        'price' => '₹1,89,900',
        'monthly' => '₹17,229',
        'image' => 'images/studio-display.svg',
        'colors' => [],
        'type' => 'display'
    ],
    [
        'id' => 'studio-display-xdr',
        'name' => 'Studio Display XDR',
        'badge' => '',
        'description' => 'An advanced display for colour-critical creative projects.',
        'price' => '₹3,99,900',
        'monthly' => '₹36,281',
        'image' => 'images/studio-display-xdr.svg',
        'colors' => [],
        'type' => 'display'
    ]
];

$macBuyingBenefits = [
    ['title' => 'Payment options', 'description' => 'Compare available payment methods and financing options before choosing your Mac.', 'link' => 'Ways to Buy', 'url' => '#mac-payment'],
    ['title' => 'Make it your Mac', 'description' => 'Explore configurations and choose the specifications that fit your work.', 'link' => 'Explore configurations', 'url' => '#mac-lineup'],
    ['title' => 'Education pricing', 'description' => 'Eligible students and educators can explore education purchasing options.', 'link' => 'Learn about education', 'url' => '#mac-education'],
    ['title' => 'Personal Setup', 'description' => 'Get help getting started, moving files and discovering useful features.', 'link' => 'Explore setup', 'url' => '#mac-setup'],
    ['title' => 'Delivery and pickup', 'description' => 'Review delivery and pickup choices available for your location.', 'link' => 'View delivery options', 'url' => '#mac-delivery'],
    ['title' => 'Trade In', 'description' => 'Check whether an eligible device can be traded in toward a new Mac.', 'link' => 'Learn about trade-in', 'url' => '#mac-trade-in'],
    ['title' => 'Guided shopping', 'description' => 'Get one-to-one help comparing options and finding a Mac for your needs.', 'link' => 'Talk to a Specialist', 'url' => '#mac-specialist'],
    ['title' => 'Apple Store app', 'description' => 'Explore another way to browse products and manage your shopping.', 'link' => 'Explore the app', 'url' => '#mac-app']
];

$macFeatures = [
    ['eyebrow' => 'Performance and battery', 'title' => 'Ready for a full day.', 'description' => 'Choose a Mac for everyday tasks, creative projects and long work sessions.', 'image' => 'images/macbook-pro.svg'],
    ['eyebrow' => 'Apple Intelligence', 'title' => 'Useful tools, built in.', 'description' => 'Explore intelligent features for writing, creating and getting things done.', 'image' => 'images/macbook-air.svg'],
    ['eyebrow' => 'Privacy and security', 'title' => 'Your information stays yours.', 'description' => 'Mac includes privacy and security features designed to keep your data protected.', 'image' => 'images/mac.svg'],
    ['eyebrow' => 'macOS', 'title' => 'Familiar from the start.', 'description' => 'A clear, capable desktop experience with apps and tools for everyday use.', 'image' => 'images/imac.svg'],
    ['eyebrow' => 'Compatibility', 'title' => 'Your favourite apps are here.', 'description' => 'Find apps for creative work, productivity, communication and entertainment.', 'image' => 'images/mac-mini.svg'],
    ['eyebrow' => 'Built to last', 'title' => 'Made for everyday use.', 'description' => 'Explore durable designs, software updates and support throughout ownership.', 'image' => 'images/mac-studio.svg']
];

$macEcosystem = [
    ['title' => 'Mac and iPhone', 'description' => 'Share files and continue activities between devices using supported features.', 'image' => 'images/iphone.svg'],
    ['title' => 'Mac and iPad', 'description' => 'Add an iPad to your workspace for more ways to create and stay productive.', 'image' => 'images/ipad.svg'],
    ['title' => 'Mac and Apple Watch', 'description' => 'Connect your Mac experience with supported features on Apple Watch.', 'image' => 'images/watch.svg']
];

// Product cards for "The latest" section
$latestProducts = [
    [
        'id' => 'ipad-mini',
        'badge' => 'PRE-ORDER 28 OCT',
        'title' => 'iPad mini',
        'subtitle' => 'More than a little awesome.',
        'price' => 'From ₹82900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-ipad-mini-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvZWtUUEloU2lLNzVjMmxzaWQzSGxUQmZ1MmNzRk1seHJLVXl4dDlSYkxhNjhKazZ3eldNWjF4eFJ4OTNUaDNrTEV3aURHTjg1akJUdGtZR0dia3g1KzhPTlFHaEh5OHdkdUhzUm96NXBkVFA&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-ipad/ipad-mini'
    ],
    [
        'id' => 'iphone-duo',
        'badge' => 'NEW',
        'title' => 'iPhone Duo',
        'subtitle' => 'The largest display of any iPhone. Foldable. Poseable. And durable.',
        'price' => 'From ₹299900.00 Footnote ※',
        'image' => 'images/iphone-duo-folded.png',
        'link' => 'https://www.apple.com/in/shop/buy-iphone/iphone-duo'
    ],
    [
        'id' => 'iphone-18-pro',
        'badge' => 'NEW',
        'title' => 'iPhone 18 Pro',
        'subtitle' => 'A big leap in battery life, performance and camera of any iPhone.',
        'price' => 'From ₹164900.00 Footnote ※',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-iphone18-pro-202610?wid=960&hei=1000&fmt=webp&qlt=80&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvVnEzQ2FidE9ES3UzcUFpRmxSc0ZyaEtqUW9RRDFCeS9WTVY4VGJCRXIyUkRDMEdwbm95NWRHNkRZZHpMc2JMc1krUkx6K2JEQ0dYdEg5MXNVdllkOThDbWxKNzFtbXhDb21VTU40REtLZnc&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-iphone/iphone-18-pro'
    ],
    [
        'id' => 'apple-homeview',
        'badge' => 'PRE-ORDER NOW',
        'title' => 'Apple HomeView',
        'subtitle' => 'Designed for life at home.',
        'price' => '₹39900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-home-view-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvVEhsN1VYeXBqQkpkU2NpUFdKZDIySmZ1MmNzRk1seHJLVXl4dDlSYkxhNjhKazZ3eldNWjF4eFJ4OTNUaDNrTE82RmVxWWIvOVFZenZNVkRuZ1RJWlBCUFNPcm9jN21pNXlIK1pNbU5Zd0s&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-home/apple-homeview'
    ],
    [
        'id' => 'apple-watch-series-12',
        'badge' => 'NEW',
        'title' => 'Apple Watch Series 12',
        'subtitle' => 'The most accurate heart rate sensing in a wearable. Footnote 1',
        'price' => 'From ₹56900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-watch-series12-202610?wid=959&hei=1000&fmt=p-jpg&qlt=80&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvVW53MHFoMnBoT29TemFXL3Z4V3hEbU1XS1M2SlM2V3ZuaHdqUDRtYUVzUmt6RnZBTjJMOU5IQzNPNDB1STAwMkdmalN5dlRpR2R3QUc1RGJwYllnWmp4MHpkdHlwcXA3bDFsY3BoQlBVZjI&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-watch/apple-watch'
    ],
    [
        'id' => 'apple-watch-ultra-4',
        'badge' => 'NEW',
        'title' => 'Apple Watch Ultra 4',
        'subtitle' => 'A battery you can’t outrun.',
        'price' => 'From ₹109900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-watch-ultra4-202610?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvWmVGVmN5NkZpNWpnc0owRy83UCtTSjVJSnpSaSsrVk5BNzBoeTQ4aWhoaVVrc1JZVkQ0S2s0elFpK2Y1K2lCS1d1Y0hhYzFCK0tzV3gwSFNTUHQzNHNLZlZpS3Noay8rQTZ4Q3lXQmk4ejQ&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-watch/apple-watch-ultra'
    ],
    [
        'id' => 'iphone-accessories',
        'badge' => '',
        'title' => 'Shop iPhone accessories.',
        'subtitle' => 'Discover new accessories for iPhone 18 Pro and iPhone Duo.',
        'price' => '',
        'button_text' => 'Shop',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-accessories-202610?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvYU1zWFV3NENFWlBhRk13WWZ3cGpPY3RlbWhLdDRhTWR6QWdNUnBDQmF6MXU2S1NDY0Mybzd2UUxDKzhkSmN0dEp6ekdGbHg3R1BkT1NkUXBhZ1haYkI4ZzFxbTF4TEhQYmttTlQ1N3Rha0U&traceId=1',
        'link' => 'https://www.apple.com/in/shop/iphone/accessories'
    ],
    [
        'id' => 'beats-360',
        'badge' => 'NEW',
        'title' => 'Beats 360',
        'subtitle' => 'Interchangeable cushions. Footnote 2 And the best Beats sound yet',
        'price' => '₹42900.00',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-40-beats-360-202610?wid=800&hei=1000&fmt=p-jpg&qlt=80&.v=ajBiNG1Rb2dTaHlKLzhlckEwd0JZcldqK1BzWUd0SU9mNk96QVZQMU9TYjkvamYzRzRvcFlnajNacmhEOC9BeGJLRkx3RDVvZWFBZ2pOaXMvUXhHQ1VOdDRTL3k5WmRsTmM1dHFvaTV5ejE3elJuQlNOb1hBU2ZGc01uK0d5YTU&traceId=1',
        'link' => 'https://www.apple.com/in/shop/beats/accessories'
    ],
    [
        'id' => 'mac-mini',
        'badge' => 'NEW',
        'title' => 'Mac mini',
        'subtitle' => 'Now with M6 and M5 Pro.',
        'price' => 'From ₹99900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-mac-mini-202610?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvVzcrSWQzM1k4Y3ZTeE9hUGNIRVBidUhBaVVwSTd1aUdWMG5YY09LSURSWHFmS3YvQ0doSFZENndQR0J4TTRqbnhRZFZETU02Z2pGOTdFaUxUeXJDWktGOFFlMmh4ZUxkODBHZHBLbzdrdUo&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-mac/mac-mini'
    ],
    [
        'id' => 'mac-studio',
        'badge' => 'NEW',
        'title' => 'Mac Studio',
        'subtitle' => 'Now with M5 Max and M5 Ultra.',
        'price' => 'From ₹279900.00 Footnote ±',
        'image' => 'images/mac-studio.svg',
        'link' => 'https://www.apple.com/in/shop/buy-mac/mac-studio'
    ],
    [
        'id' => 'iphone-17',
        'badge' => 'NEW',
        'title' => 'iPhone 17',
        'subtitle' => 'Magichromatic.',
        'price' => 'From ₹99900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-iphone17-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvWi94YTBvM09PYlowM0RnWkgxemd5bUhBaVVwSTd1aUdWMG5YY09LSURSWGdpcjhyQnJrZTk3NDVpVGh0RDBPL2NsalEwZ1NENmFML2U0bVAxbXFvR2c1RTB3V3pGOXlQQVhxZHJ0Zkt3NHk&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-iphone/iphone-17'
    ],
    [
        'id' => 'ipad-air',
        'badge' => 'NEW',
        'title' => 'iPad Air',
        'subtitle' => 'Now supercharged by M4.',
        'price' => 'From ₹89900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-ipad-air-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvZjNLYXFNKytrcTVJQTF5K1BkcDFtV0hBaVVwSTd1aUdWMG5YY09LSURSWGdpcjhyQnJrZTk3NDVpVGh0RDBPL2NsalEwZ1NENmFML2U0bVAxbXFvR2hjSE1KTThKTWRqck9wV00ySXpwaFA&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-ipad/ipad-air'
    ],
    [
        'id' => 'macbook-neo',
        'badge' => 'NEW',
        'title' => 'MacBook Neo',
        'subtitle' => 'The magic of Mac at a surprising price.',
        'price' => 'From ₹79900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-macbook-neo-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvZkZTZ3JBVTZzc3pZWm5QeExmd2FETXRlbWhLdDRhTWR6QWdNUnBDQmF6MWg1MCt4d0ZhbjJwNTZXbDFSKzZRbXJkNjVaWmJodU5OTFBjM0tsaktSSHo1ZGJiVHFWazJRWmEwYkJKdURTckE&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-mac/macbook-neo'
    ],
    [
        'id' => 'ipad-pro',
        'badge' => 'NEW',
        'title' => 'iPad Pro',
        'subtitle' => 'Mmmmm. Power.',
        'price' => 'From ₹139900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-ipad-pro-202610?wid=961&hei=1001&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvVk0wSU91dUVVUjY2LzBCOWk2MWZSVW5WcnpwZC95dlFjMmViUjVVNk9LM0JWMy9CRUttdzN3Umtxcm5EZGU4TnNsalEwZ1NENmFML2U0bVAxbXFvR2k5Ni9md3gxWjc5aFFZdnI2ZXpUUkc&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-ipad/ipad-pro'
    ],
    [
        'id' => 'macbook-air',
        'badge' => 'NEW',
        'title' => 'MacBook Air',
        'subtitle' => 'Now supercharged by M5.',
        'price' => 'From ₹149900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-macbook-air-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvY3ZyNEk0ZzZtcUw0Y09HTjNnVDVPa3RlbWhLdDRhTWR6QWdNUnBDQmF6MWg1MCt4d0ZhbjJwNTZXbDFSKzZRbXJkNjVaWmJodU5OTFBjM0tsaktSSHhPek8rMkhDM0l5aldLK3BhK2U3emo&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-mac/macbook-air/macbook-air-with-m5-chip'
    ],
    [
        'id' => 'macbook-pro',
        'badge' => 'NEW',
        'title' => 'MacBook Pro',
        'subtitle' => 'Now with M5, M5 Pro and M5 Max.',
        'price' => 'From ₹239900.00 Footnote ±',
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-macbook-pro-202610?wid=960&hei=1000&fmt=webp&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvWG16SVlHUmQ0M2xZbTlac1FDbkdxVXRlbWhLdDRhTWR6QWdNUnBDQmF6MWg1MCt4d0ZhbjJwNTZXbDFSKzZRbXJkNjVaWmJodU5OTFBjM0tsaktSSHpKQ1p3bGF0c2xhb1ZqVTBQYm45QWw&traceId=1',
        'link' => 'https://www.apple.com/in/shop/buy-mac/macbook-pro'
    ]
];

$storeStorySections = [
    [
        'id' => 'store-difference',
        'title' => 'The Apple Store Difference.',
        'subtitle' => 'Celebrate the season your way.',
        'style' => 'difference',
        'accent_title' => true,
        'cards' => [
            [
                'eyebrow' => 'FESTIVE OFFER',
                'title' => 'Get up to 12 months of No Cost EMI¹ this season.',
                'description' => 'Plus up to ₹15000.00 instant cashback. Δ',
                'video' => 'https://store.storevideos.cdn-apple.com/v1/store.apple.com/st/1790581490379/store-card-50-diwali-offer-animation-202610.mp4',
                'link' => 'https://www.apple.com/in/shop/browse/overlay/store/in_affordability',
                'link_text' => 'See festive offer'
            ],
            [
                'eyebrow' => 'ONLY AT APPLE',
                'title' => 'Limited edition. Unlimited joy.',
                'description' => 'Special Edition AirPods 5 with Wireless Charging Case featuring festive engraving.†',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-se-airpods-202610?wid=960&hei=1000&fmt=jpeg&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvUkpyU1Bld1gybm1FekJTbFVKbWRJcXV5OFhuT3FzSmVjL3ZuakZ1aXEzT1JSeXJaL3JqNm9jc2psYU5Qelh0TnY0R3dEOGVCRWxWZjZGTGNzTDRqUGtzUmN0bVc0Ump2NnE1SWRWaGdwOGY',
                'image_alt' => 'Festively engraved AirPods, AirTag, Apple Pencil Pro and iPad',
                'link' => 'https://www.apple.com/in/shop/buy-airpods/special-edition',
                'link_text' => 'Shop special edition'
            ],
            [
                'eyebrow' => 'FREE ENGRAVING',
                'title' => 'Add a festive touch to your devices.',
                'description' => '',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-engraving-202610?wid=960&hei=1000&fmt=jpeg&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvZGl1dWNSdk5RaURmVjlRUFo3ODlrTmZ1MmNzRk1seHJLVXl4dDlSYkxhNjczTGJ1bkVZOVdxMC9CSUwydmQ4a09CdEhCcUlybWhVS2dIZC94VE8wUXdDRGhCcjhCbUxRSDhmMk02QUtSNDY',
                'image_alt' => 'Festively engraved AirPods, AirTag, Apple Pencil Pro and iPad',
                'link' => 'https://www.apple.com/in/shop/browse/overlay/store/diwali/engraving',
                'link_text' => 'Explore free engraving'
            ],
            [
                'eyebrow' => 'APPLE SPECIALIST',
                'title' => 'Find the perfect gift with help from a Specialist.',
                'description' => 'Find the perfect gift with help from a Specialist.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-specialist-202610?wid=960&hei=1000&fmt=p-jpg&qlt=95&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvUlhCNURWVnpLWFA5Tm9JMlorR0RYdXV5OFhuT3FzSmVjL3ZuakZ1aXEzT3N2Mmx4a3VvSnUzaFUvSVlVRUJkbFBIcFd0Z2R0MzkwdmpGTWZ1L3pSVnBDMjdwQlNlbFJ5d3lza1ZzVFR5YWs',
                'image_alt' => 'Apple Specialist helping customers find a festive gift',
                'link' => 'https://www.apple.com/in/shop/browse/overlay/store/specialist',
                'link_text' => 'Find the perfect gift with help from a Specialist',
                'additional_links' => [
                    ['text' => 'Customise your Mac.', 'url' => 'https://www.apple.com/in/shop/browse/overlay/store/cto', 'icon' => 'mac'],
                    ['text' => 'Get a personalised shopping experience in the Apple Store app.', 'url' => 'https://www.apple.com/in/shop/browse/overlay/store/personalized_shopping', 'icon' => 'store'],
                    ['text' => 'Exchange your smartphone, get ₹4500.00-₹81500.00 in credit towards a new one. Footnote ‡', 'url' => 'https://www.apple.com/in/shop/browse/overlay/store/tradein', 'icon' => 'trade'],
                    ['text' => 'Choose from seamless delivery and pickup options.', 'url' => 'https://www.apple.com/in/shop/browse/overlay/store/delivery', 'icon' => 'delivery'],
                    ['text' => 'Set up your new device with help from a Specialist.', 'url' => 'https://www.apple.com/in/shop/browse/overlay/store/personal', 'icon' => 'setup'],
                    ['text' => 'Trade in your eligible Mac, Apple Watch or iPad for instant credit. Footnote ‡ In-store only.', 'url' => 'https://www.apple.com/in/shop/browse/overlay/store/instant_credit', 'icon' => 'credit']
                ]
            ]
        ],
    ],
    [
        'id' => 'joy-starts-here',
        'title' => 'Joy starts here.',
        'subtitle' => 'Make it a season to remember.',
        'style' => 'joy',
        'accent_title' => true,
        'cards' => [
            [
                'eyebrow' => 'APPLE WORKSHOP',
                'title' => 'Workshop: Draw your own rangoli on iPad.',
                'description' => 'Join a free in-store session and create a rangoli design to share this festive season using Procreate.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-taa-202610?wid=960&hei=1000&fmt=jpeg&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvVHd4K2ZtYWZkamE2R2ZLZ1J5OGhla2srNUZoNXdjRTN6Qk9kZzJzT0IxWmJGcXNRQnFCV0w3WVRjTExvdm1ic1kvNmdrRTByUnVSWVU0UFFZR1FwWUs1dDgvV3BhU1hoSzFPUEZjam5HQ2g',
                'image_alt' => 'Hand holding an iPhone with a custom rangoli pattern on its Lock Screen',
                'link' => 'https://www.apple.com/in/shop/browse/overlay/taa/diwali_rangoli',
                'link_text' => 'Workshop: Draw your own rangoli on iPad'
            ],
            [
                'eyebrow' => 'FESTIVE WALLPAPER',
                'title' => 'Display your creativity.',
                'description' => 'Create, download and share your own rangoli for the season.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-rangoli-wallpaper-202610?wid=960&hei=1000&fmt=jpeg&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvWFNXY1lIWktoU1NlOVZlNnV4cnB6U01LTk5FUHNvTFg0VkpaZEczL2tQMm8rb0daZ3hnTTcwRGVweC9nTTJvRUw2TGhYaGhMVkJpQ2RGWWVURTZNbXl1S1haeWpPdU1LSGVUbTN4a2J5Mnk',
                'image_alt' => 'Festive rangoli wallpaper displayed on an iPhone',
                'link' => 'https://www.apple.com/in/create-your-rangoli',
                'link_text' => 'Create your own rangoli'
            ],
            [
                'eyebrow' => 'DIGITAL GIFTING',
                'title' => 'A gift they can enjoy right away.',
                'description' => 'Send a little joy with an Apple Gift Card.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-diwali-digital-gifting-202610?wid=960&hei=1000&fmt=jpeg&qlt=90&.v=OFNkSGoxY3NpM0N3bnkyV2ptalgvY1ZWOVBpTlVtVTlabEdQcysyZ1lVcHJPeWh3M05XemdXYnFpSnVFZVg0SUg5ejdWTERjRzFudm5KM1dmcUF1VmpNZGEwYVUyTzcvZlg1UkxwTzJQS1dTelE0MC9IbWpTQ1dsVTdlODVNdkI',
                'image_alt' => 'AirPods 5 with Wireless Charging Case',
                'link' => 'https://www.apple.com/in/shop/gift-cards',
                'link_text' => 'Shop Apple Gift Cards'
            ]
        ]
    ],
    [
        'id' => 'tune-in-to-joy',
        'title' => 'Tune in to joy.',
        'subtitle' => 'Discover a world of great sound.',
        'style' => 'sound',
        'cards' => [
            [
                'eyebrow' => 'APPLE MUSIC',
                'title' => 'Get 3 months of Apple Music free.',
                'description' => 'Included with the purchase of selected Apple devices. ※',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-40-diwali-apple-music-202610?wid=800&hei=1000&fmt=webp&qlt=90&.v=VUVLOTdCMGtYaEV1N3JjamdXV1NMRFYwVEV6a1RVRHNWeGxURWZJMktTd2V6TldRZUlrWUdNRXNrQVJkVGdZV2g1MCt4d0ZhbjJwNTZXbDFSKzZRbXJkNjVaWmJodU5OTFBjM0tsaktSSHc2VGM5K3hUaTlTT2lHYW11Z3ROMGI&traceId=1',
                'image_alt' => 'Special Edition AirPods 5 with a festive rangoli design',
                'link' => 'https://www.apple.com/in/apple-music',
                'link_text' => 'Get 3 months of Apple Music free'
            ],
            [
                'eyebrow' => 'ONLY AT APPLE',
                'title' => 'Special Edition AirPods 5 with Wireless Charging Case',
                'description' => 'MRP ₹17900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-special-edition-hero-select-diwali-202610?wid=400&hei=400&fmt=jpeg&qlt=90&.v=RGF3ZGhMT1pmdWRNNWNIMHBIbjB4a1draC9yUWN6dnp6cjdlRDArRzViNVlTQXNJTEhnS3J2MVVvbXg1UktGeU1USEFOSzIxQmNWWDFsSGpnZzBTaC8vU3JjZHd1MTRSd0VqZnNnTGdmZmxaYWVtNWEyTDBhUWt2dGFlY083TXIrRGVWeVBRQ05nMTAzOEhlYys3S2l3',
                'image_alt' => 'Special Edition AirPods 5 with Wireless Charging Case and festive rangoli engraving',
                'link' => 'https://www.apple.com/in/shop/product/mldf4hn/a/with-wireless-charging-case',
                'link_text' => 'Shop Special Edition AirPods 5'
            ],
            [
                'eyebrow' => 'NEW',
                'title' => 'HomePod mini 2 – Pink',
                'description' => 'MRP ₹18900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-mini-select-pink-202610?wid=400&hei=400&fmt=jpeg&qlt=90&.v=K2c3bEwyaWVDeDZkdHpLbHkwcGVSakVLNnFHbW9LWXE5UEVTVVJLTUNZZllLY3ZhZTUxL0tMOHhxSjgvSFVnYTE1UUxLT2t0cW42N3FvQzVqaGhrVVN2YVlXWmpxYlh5dVdST1dBWEMwb3grYWpGdS9XeFgvbS9ITnNYOEhYaG4',
                'image_alt' => 'Pink HomePod mini 2',
                'link' => 'https://www.apple.com/in/shop/product/mgkr4hn/a/pink',
                'link_text' => 'Shop HomePod mini 2',
                'colors' => [
                    ['name' => 'White', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-mini-select-white-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=K2c3bEwyaWVDeDZkdHpLbHkwcGVScUNNeFgzb01NZmZpZzZSMGM2UHlLWmFpQzY4QU1YNUEzRWZDMHpVRXBjSU4xU1Z0cFpWNm8yUlJuN1FJbVJwMUNzanVvK1U1TlRIN0pkZGNWcWdYak52TnYyQ25tSTNhY25VVWVpRE1tNlg'],
                    ['name' => 'Pink', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-mini-select-pink-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=K2c3bEwyaWVDeDZkdHpLbHkwcGVScXRRVlBBbThId3VGVjV5R0VkY1BOUG5lSjJyZXpzbC9sTnlhY2RJL3Z1b2t0ekFGWTdKMENMdER2NlM3a2pob3BRRkpUVVJOU2pwR3JZZk9OcDFHK1VWd2d1aDdjWlBzYTM0Qks4TGxaZms'],
                    ['name' => 'Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-mini-select-blue-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=K2c3bEwyaWVDeDZkdHpLbHkwcGVScXc1YnoxZGlJcWhmYnNWOWJuYkpDVG5lSjJyZXpzbC9sTnlhY2RJL3Z1b2t0ekFGWTdKMENMdER2NlM3a2pob3BRRkpUVVJOU2pwR3JZZk9OcDFHK1h2REUzaWczUUlmV0lsNXQwWlhpajM'],
                    ['name' => 'Green', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-mini-select-green-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=K2c3bEwyaWVDeDZkdHpLbHkwcGVSazBhY04wdUIvdlZUQk1GWGNzZHR6eGFpQzY4QU1YNUEzRWZDMHpVRXBjSU4xU1Z0cFpWNm8yUlJuN1FJbVJwMUNzanVvK1U1TlRIN0pkZGNWcWdYalBEeUZveGI4d21USVo0cmJ5ZW4wS2o'],
                    ['name' => 'Midnight', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-mini-select-midnight-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=K2c3bEwyaWVDeDZkdHpLbHkwcGVSaFRaZXZublY0K2p0Ri9sOWcwbVh6akFDd29XbUJVbU9hVlRNU3h4dExEb05SQnIzRnZJWE90ZUFZdkttK09qTnluRDU0QlhPa2Z3TGU0TDlmckt5Z3NZN2hNY0lJblBJZ3YvMWZDNjRSelk']
                ]
            ],
            [
                'eyebrow' => '',
                'title' => 'AirPods Max 2 – Orange',
                'description' => 'MRP ₹74900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-max-select-202409-orange?wid=400&hei=400&fmt=jpeg&qlt=90&.v=azQxRkVJKzd6V3J0aGNqWFhLMzBmbVl3dU4zNmtlQ1czYnJUSEJUcWowR1RLNDVIb25yeWxTSzhxdXNNaFBBZmJGcXNRQnFCV0w3WVRjTExvdm1ic2NuVVNtQlZidWtkei9YRC9LdExFbFZBU25Ob2N5dVQyQmxkN0IyWWVHdW0',
                'image_alt' => 'AirPods Max 2 over-ear headphones in orange',
                'link' => 'https://www.apple.com/in/shop/product/mhwn4hn/a/orange',
                'link_text' => 'Shop AirPods Max 2',
                'colors' => [
                    ['name' => 'Purple', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-max-select-202409-purple_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=azQxRkVJKzd6V3J0aGNqWFhLMzBmdEFZMGtjOXNTYXJEaHFYa1lFVzIyUmFpQzY4QU1YNUEzRWZDMHpVRXBjSU4xU1Z0cFpWNm8yUlJuN1FJbVJwMUlGUFhOdTZkMWpFWU84VW1YdkV5akNRd0hTVGRwK0hGRDZ2cHY3OVAxaWE'],
                    ['name' => 'Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-max-select-202409-blue_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=azQxRkVJKzd6V3J0aGNqWFhLMzBmb0JiTy8rMnA3YjhsMm11blczbzRDVUFuV0psZ0JRc0xMNHNraHBENkdxOU1CZjUwYjhVN3dDUVBjMjVNZ1IxQUdtbmFXU1V3TllDY2laMU00WVMyRE1XY2NmSWNLK2p6T0t6OVFidVg0emY'],
                    ['name' => 'Midnight', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-max-select-202409-midnight_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=azQxRkVJKzd6V3J0aGNqWFhLMzBmdmVWNWdHYnp5cHkwMldsSElEOHpyeHpZQVJVVDZFeFVEWDd6ZW9MOXN4MW1TNk5ReHNJUDU3Y290emFpeE5nZkhhNTg4T05Ec0E3TWdBUW1EZTMyakVCVExaejlNM0RTeGVvbnJla2hmemM'],
                    ['name' => 'Starlight', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-max-select-202409-starlight_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=azQxRkVJKzd6V3J0aGNqWFhLMzBmdWd1NjlYUXFPTDZEK2xySGJScW1PSkQvNkdrbW5KMHFNZFZhZHZWaURZeU5SQnIzRnZJWE90ZUFZdkttK09qTjVyTmNMbStFa25CTklVMjltdmZaZmVYYlBKSzlvdkpFVUp6a29xN0FWUWU'],
                    ['name' => 'Orange', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-max-select-202409-orange_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=azQxRkVJKzd6V3J0aGNqWFhLMzBmbVl3dU4zNmtlQ1czYnJUSEJUcWowRmFpQzY4QU1YNUEzRWZDMHpVRXBjSU4xU1Z0cFpWNm8yUlJuN1FJbVJwMUlGUFhOdTZkMWpFWU84VW1YdkV5akFVMWlmbVl0ZklRcUttM3pwYWFZSms']
                ]
            ],
            [
                'eyebrow' => 'FREE ENGRAVING',
                'title' => 'AirPods Pro 3',
                'description' => 'MRP ₹27900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airpods-pro-3-hero-select-202509?wid=400&hei=400&fmt=jpeg&qlt=90&.v=cmp4MmZ6OWxOeHNNTXh4SzlBNUpEb1RucE9zZTI5eEREaWZpY29lSld3eVRLNDVIb25yeWxTSzhxdXNNaFBBZmJGcXNRQnFCV0w3WVRjTExvdm1ic1YxRUxFRmRlWDBITzhnRmZ5OTRmaVdKTExiOEFsRmxtQ2Nua0tRSC83MkI',
                'image_alt' => 'AirPods Pro 3 with MagSafe Charging Case',
                'link' => 'https://www.apple.com/in/shop/product/mfhp4hn/a',
                'link_text' => 'Shop AirPods Pro 3'
            ],
            [
                'eyebrow' => 'NEW',
                'title' => 'Beats 360 Over-Ear Headphones – Pink',
                'description' => 'With Pink Performance Knit Cushions. MRP ₹42900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/beats-360-hero-select-202609-pink?wid=400&hei=400&fmt=jpeg&qlt=90&.v=S1Nwd3BEQnhVdVpSaFZSWUlLeGNTSDdtSkQ4KzBMZnFwSkdZLzFlQ1BLUEw4MGhKNUM2QkhXYXh1Zk5reXJSbS85S3R4M0M3WGhIQVNOK3lBdUI5K1RCdmtEUXAzTkdrTmZNdXhlWW1QMm0vL3ZkM1FpMmdRMXVmLzZObkZQcnU',
                'image_alt' => 'Beats 360 over-ear headphones in pink',
                'link' => 'https://www.apple.com/in/shop/product/mje64zm/a/pink',
                'link_text' => 'Shop Beats 360',
                'colors' => [
                    ['name' => 'Cloud', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/beats-360-hero-select-202609-cloud_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=S1Nwd3BEQnhVdVpSaFZSWUlLeGNTS0UzQ0taU2J5T1BxaTZhNTJTcm16MzRsa24zOGcrd216VXlNRW1VUmlIeW1TNk5ReHNJUDU3Y290emFpeE5nZkVsUG84WHNuc21wRVN2ZHM1dEsrdHJGaWk5U0tLd2pqZEtaNlFzMUJoMGU'],
                    ['name' => 'Black', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/beats-360-hero-select-202609-black_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=S1Nwd3BEQnhVdVpSaFZSWUlLeGNTRStkKzd3aGhtUGVGNDgrb09OT1h4S1VWSzlHazA5MFFXMDd3aDFWRDZCbm1TNk5ReHNJUDU3Y290emFpeE5nZkVsUG84WHNuc21wRVN2ZHM1dEsrdHBqd3dwQ1ZYTHlmT2tSM0dPRzlBV3g'],
                    ['name' => 'Pink', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/beats-360-hero-select-202609-pink_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=S1Nwd3BEQnhVdVpSaFZSWUlLeGNTSDdtSkQ4KzBMZnFwSkdZLzFlQ1BLTUZ4dDMxSnVpWDZjV014bVMyK05qSUFob2lEelc0ajlLcGhUVS9aRjBUZWxWNE9MdENJamtxZ0g0eU84UXRFSGxXb0N1N1VIdE9tV1ZnWlBkdk9abDQ'],
                    ['name' => 'Sky', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/beats-360-hero-select-202609-sky_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=S1Nwd3BEQnhVdVpSaFZSWUlLeGNTQW41UkkwYW9HaCthQ3JUWDJMdGFSRmFpQzY4QU1YNUEzRWZDMHpVRXBjSU4xU1Z0cFpWNm8yUlJuN1FJbVJwMU4yNWRMaGJrKzVGQS9yb1g4NngxbzREOTJXd0dha0NIa1gwSkR1VEtGU1c']
                ]
            ],
            [
                'eyebrow' => '',
                'title' => 'HomePod – White',
                'description' => 'MRP ₹44900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-select-white-202610?wid=400&hei=400&fmt=jpeg&qlt=90&.v=M2ZJQ1JEdTZVMVdoSy9OYURZL0UwS3ZBRmRMV29lU1Y4TlBINTBwcXdxdEQ4eDQxcUNOL3l1WDd2VTYzMXJYbkJkRlpCNVhYU3AwTldRQldlSnpRa0FKbUNHUGVMQk1UNWU5RzdKa1NrSEk',
                'image_alt' => 'White HomePod smart speaker',
                'link' => 'https://www.apple.com/in/shop/product/mdey4hn/a/white',
                'link_text' => 'Shop HomePod',
                'colors' => [
                    ['name' => 'White', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-select-white-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=M2ZJQ1JEdTZVMVdoSy9OYURZL0UwUHZ2bjZHY1RTN1c5ZHBMcTZPcWkxbjJXRUU1Y2dmMGNMbnJtd3ZQZXJkZkhFUzJzeWNxdFZLbFVJWEt6ZkxSQ1JxdDFNK3NibEVLR0pyc1VaVkRTUEIyUXQrc1F4VFIwcWJZNzNTUVpwSTY'],
                    ['name' => 'Midnight', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/homepod-select-midnight-202610_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=N0JQcmtNWnVWeGozUXcxK2ZBcC9vUUNnejZ0bUlxbThua2pSZ1dtYXMxNEFuV0psZ0JRc0xMNHNraHBENkdxOU1CZjUwYjhVN3dDUVBjMjVNZ1IxQUQzYm8vZUxtalBMS0tHcU1yYkFIQlh1S3dLejQ0WlNVVEMxNkZOMlN0dmk']
                ]
            ],
            [
                'eyebrow' => '',
                'title' => 'Powerbeats Pro 2 – Electric Orange',
                'description' => 'High-Performance Earbuds. MRP ₹29900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MX743?wid=400&hei=400&fmt=jpeg&qlt=90',
                'image_alt' => 'Powerbeats Pro 2 high-performance earbuds in electric orange',
                'link' => 'https://www.apple.com/in/shop/product/mx743zm/a/powerbeats-pro-2-high-performance-earbuds-electric-orange',
                'link_text' => 'Shop Powerbeats Pro 2',
                'colors' => [
                    ['name' => 'Matt Black', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MW443_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=NlhRaVA5SFBkdThpUHIwTHl5WHBJMHVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVDBFNDFUVE16enU3Mm1tajh0SVF3K3c'],
                    ['name' => 'Statement Red', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MWQW3_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=TW9VSGhSejRyN0hGWUtjcWtGUkljVXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVEVrTUp2dUtSK3VqcGkxcjQ2bHZXMXc'],
                    ['name' => 'Champagne Gold', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MW463_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=NWo3RDVocklPMGhxMHN6dWFYZzZoVXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVEc3SThLVXNRbDgxL0t6VkhqYUNoSXc']
                ]
            ],
            [
                'eyebrow' => '',
                'title' => 'Beats Pill – Champagne Gold',
                'description' => 'Wireless Bluetooth® Speaker. MRP ₹16900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MW463?wid=400&hei=400&fmt=jpeg&qlt=90',
                'image_alt' => 'Beats Pill wireless speaker in champagne gold',
                'link' => 'https://www.apple.com/in/shop/product/mw463zm/a/beats-pill-wireless-bluetooth-speaker-champagne-gold',
                'link_text' => 'Shop Beats Pill'
            ]
        ]
    ],
    [
        'id' => 'store-accessories',
        'title' => 'Accessories.',
        'subtitle' => 'Get more attached to your devices this season.',
        'style' => 'accessories',
        'cards' => [
            [
                'eyebrow' => 'NEW ARRIVALS',
                'title' => 'Perfectly paired gifts.',
                'description' => 'Explore accessories in new colours, styles and textures you’ll love.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-40-diwali-accessories-202610?wid=800&hei=1000&fmt=p-jpg&qlt=80&.v=VUVLOTdCMGtYaEV1N3JjamdXV1NMS01zWFV3NENFWlBhRk13WWZ3cGpPY2V6TldRZUlrWUdNRXNrQVJkVGdZV3U2S1NDY0Mybzd2UUxDKzhkSmN0dEp6ekdGbHg3R1BkT1NkUXBhZ1haYkJnbHp3WVBQZVczNGNkZWlVVXJuOFU&traceId=1',
                'image_alt' => 'iPhone accessories including wallets, cases and straps in festive colours',
                'link' => 'https://www.apple.com/in/shop/accessories/all/new-arrivals',
                'link_text' => 'Perfectly paired gifts'
            ],
            [
                'eyebrow' => 'NEW',
                'title' => 'iPhone Duo Case – Sand',
                'description' => 'MRP ₹8900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MKR94?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'iPhone Duo Case in sand',
                'link' => 'https://www.apple.com/in/shop/product/mkr94zm/a/iphone-duo-case-sand',
                'link_text' => 'Shop iPhone Duo Case',
                'colors' => [
                    ['name' => 'Navy Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MKR84_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=bDF2YjJjL2hHK0NwaUkza1F0Z2Naa3VZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVHU4UE1Oa25ycVJjcDI4Tk1IRk1FY2c'],
                    ['name' => 'Sand', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MKR94_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=ZE5QeVJISG5VTEpmQ01pV2lOd25XMHVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVHZSb2ptbmhlRmpYNEdpTGhZN3hzOVE']
                ]
            ],
            [
                'eyebrow' => 'NEW',
                'title' => 'iPhone 18 Pro Max Silicone Case with MagSafe – Magenta',
                'description' => 'MRP ₹5900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK904?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'iPhone 18 Pro Max Silicone Case with MagSafe in magenta',
                'link' => 'https://www.apple.com/in/shop/product/mk904zm/a/iphone-18-pro-max-silicone-case-with-magsafe-magenta',
                'link_text' => 'Shop iPhone 18 Pro Max Case',
                'colors' => [
                    ['name' => 'Burgundy', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK914_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=cXV1Y1EzVVBubEg5bkVxRElDbzloRXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVEtBbTdGYWNLUGN1WklTZTJLWDdGNVE'],
                    ['name' => 'Olive', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK924_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=cmZoQXl4Z1M1VUNrVmNvcUZwZ0k1MHVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVGRXZmZsZkNZZnZ6bklwVTlBOGxDMXc'],
                    ['name' => 'Crisp Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK934_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=QTlYa3J4eEs4YUhWc3NhdldzU0oxVXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVDNzTTZZV2tUM3l1cEhWR2pueGNaUGc'],
                    ['name' => 'Navy Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK944_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=eFN4TFFEUnZwSEJaaG5lVHBKblFNVXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVDZ2S0J1VWU4OW93TG5GbkltQUtDL3c'],
                    ['name' => 'Magenta', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK904_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=Rmk2aXlHLzlqamloWnFCbG1scjhSMHVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVFFNOW9MUlVnSGt5anROMWxoY1JmS0E'],
                    ['name' => 'Black', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK954_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=cEd4a29QcWlHTFpHRTFjTjQ4cjJLVXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVDdGaW5vd01QWVJhMU5BcFFhMFZFcGc']
                ]
            ],
            [
                'eyebrow' => 'FREE ENGRAVING',
                'title' => 'AirTag 4 pack',
                'description' => 'MRP ₹12900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airtag-4pack-select-202601_GEO_IN?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'AirTag 4 pack',
                'link' => 'https://www.apple.com/in/shop/product/mfea4zf/a/4-pack',
                'link_text' => 'Shop AirTag 4 pack'
            ],
            [
                'eyebrow' => 'NEW',
                'title' => 'iPhone FineWoven Wallet with MagSafe – Magenta',
                'description' => 'MRP ₹6900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK9G4?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'iPhone FineWoven Wallet with MagSafe in magenta',
                'link' => 'https://www.apple.com/in/shop/product/mk9g4zm/a/iphone-finewoven-wallet-with-magsafe-magenta',
                'link_text' => 'Shop FineWoven Wallet',
                'colors' => [
                    ['name' => 'Burgundy', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK9H4_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=Q3l2RnNxSHRlcjJMUUl0U1h5L0RvMHVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVE9UUk45SHB6QksvQis5VC95R1owZnc'],
                    ['name' => 'Dark Olive', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK9K4_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=bzBVYUd6b2Y2VHBWRFFPS1JkZjh3VXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVGcybGlodXZFZlZ3TzdNV3h6RXhHUWc'],
                    ['name' => 'Wildflower Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK9J4_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=SnN3bjlHdUh6SHJ1R1VON3lOcWZua3VZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVHNTb2FYZGQ1ejA4TEZIakJkK3FuckE'],
                    ['name' => 'Magenta', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK9G4_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=cys4ajk0cnh1SGF3UEhmTFZuYlMxa3VZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVFV6VXYrVEhNcVVQSFFPeU1JVUk1YkE'],
                    ['name' => 'Navy', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MKV64_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=SU9YNVdDM2VsR2lNNXFTOGRrTExDa3VZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVFl2N05TNlhoNDNHRWRvR0kxY2c0REE'],
                    ['name' => 'Black', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MK9L4_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=NDQxbFpzRGxzc0pNbVVEY3U0L09xRXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVDlvQk4xak1VeWVjS3RMcDBxeEo3UEE']
                ]
            ],
            [
                'eyebrow' => '',
                'title' => 'Apple Pencil (USB-C)',
                'description' => 'MRP ₹7900.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MUWA3?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'Apple Pencil USB-C',
                'link' => 'https://www.apple.com/in/shop/product/muwa3zm/a/apple-pencil-usb-c',
                'link_text' => 'Shop Apple Pencil'
            ],
            [
                'eyebrow' => 'NEW',
                'title' => 'Beats iPhone 17 Case with MagSafe and Camera Control – Pebble Pink',
                'description' => 'MRP ₹4500.00 (Incl. of all taxes)',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MGK44?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'Beats iPhone 17 case in pebble pink',
                'link' => 'https://www.apple.com/in/shop/product/mgk44ll/a/beats-iphone-17-case-with-magsafe-and-camera-control-pebble-pink',
                'link_text' => 'Shop Beats iPhone Case',
                'colors' => [
                    ['name' => 'Lime Stone', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MGK34_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=MjFUbCtyR3Q3bWtGYUJrTEM3dE0zRXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVFVTSkI5VnFxUVpiLytoUk4zSFlVRmc'],
                    ['name' => 'Pebble Pink', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MGK44_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=cFArMTlMOEpSL1JDbGJ6ajNtVnpBVXVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVHRaMEZRRTc2MmZzSTJFaVNOZHZFWnc'],
                    ['name' => 'Bedrock Blue', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MGK54_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=TlpVNnAveUNsMExhaTl2UVVmbEhHa3VZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVHF2K0o3dWYzaVV3VVBRZFdnM3czS2c'],
                    ['name' => 'Granite Grey', 'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MGK24_SW_COLOR?wid=32&hei=32&fmt=png-alpha&.v=ZVJWdlNkdDgwU1JORkJiMFdwZ2FjMHVZbFJnaWZRWGhXYUNxcUhMUUl5UEhxZjQyanFrTDN5a241WlpqRHdlVHRScHBGbTNWQk1BYmZtVDNwSXMzUkE']
                ]
            ],
            [
                'eyebrow' => 'FREE ENGRAVING',
                'title' => 'AirTag',
                'description' => 'Free engraving available.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/airtag-4pack-select-202601_GEO_IN?wid=800&hei=800&fmt=jpeg&qlt=90',
                'image_alt' => 'AirTag four-pack',
                'link' => 'https://www.apple.com/in/shop/product/mfe94zf/a/1-pack',
                'link_text' => 'Shop AirTag'
            ]
        ]
    ],
    [
        'id' => 'apple-experience',
        'title' => 'The Apple experience.',
        'subtitle' => 'Do even more with Apple products and services.',
        'style' => 'experience',
        'cards' => [
            [
                'eyebrow' => '',
                'title' => 'Easy setup. Simple controls. Smarter home.',
                'description' => 'With Apple Home devices and accessories, it’s never been simpler to set up and control a connected home.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-home-ecosystem-202610_GEO_IN?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=UWdrNzNrY0ZiOGhRNlVuUlF4U3JoL2NtZFlXYzV2akMyMWhXSFZ4eEdsRWtsTFdZK1dOUmdYeFZjR1ZqTzZhRVM3UUxhTDY4VmxnT1pqOEpldm1McjJmalN5dlRpR2R3QUc1RGJwYllnWmlHZHRtV2tFMmJiSTZBZ095d3pPWEg',
                'image_alt' => 'Apple Home ecosystem across Apple devices and accessories',
                'link' => 'https://www.apple.com/in/shop/browse/overlay/store/apple_home',
                'link_text' => 'Easy setup. Simple controls. Smarter home.'
            ],
            [
                'eyebrow' => 'HOME',
                'title' => 'See how one app can control your entire home.',
                'description' => '',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-homekit-202610_GEO_IN?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=UWdrNzNrY0ZiOGhRNlVuUlF4U3JoMnpDYmtLMTlxZ3ZwMUhYOXYvemtTTk5vejA3aW9Ea2JXTXN5ZGl5bUxlemNva0xZQWFEV2ljOWRGNWZJRk4vWHJiVUZwMHM2dStRK3k0bFpVeFNvQTJDK3d2L1hRby9waUpRc2tBMEs4OEk&traceId=1',
                'image_alt' => 'Home app on iPhone showing room controls and camera feeds',
                'link' => 'https://www.apple.com/in/ios/home',
                'link_text' => 'See how one app can control your entire home'
            ],
            [
                'eyebrow' => 'CONTINUITY',
                'title' => 'Powerful alone. Superpowered together.',
                'description' => '',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-continuity-202609_GEO_IN?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=MkxpRXJEbEM4SjVucjFvcTdEU1BlNktGcElSZCtpUGVDcVhib0c0eEpta2w0SlpyZGY2R3lHL05yeVBDWGw1WXN2Mmx4a3VvSnUzaFUvSVlVRUJkbEt6d2liSm1jaWN5V1Z1b0xsZXJkam9Xc2VYZ3lVR3A3clNXOXBnOEc3N0Q&traceId=1',
                'image_alt' => 'Apple Watch, iPhone, MacBook and iPad working together with Continuity',
                'link' => 'https://www.apple.com/in/macos/continuity',
                'link_text' => 'Powerful alone. Superpowered together'
            ],
            [
                'eyebrow' => 'APPLE STORE APP',
                'title' => 'Put your bow on it.',
                'description' => 'Make the gift unmistakably theirs with a personalised message created especially for them.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-40-holiday-gifting-202512?wid=800&hei=1000&fmt=p-jpg&qlt=80',
                'image_alt' => 'AirPods 5 with Wireless Charging Case, a gift with a personalised message',
                'link' => 'https://www.apple.com/in/shop/browse/overlay/store/asa_digital_gifting',
                'link_text' => 'Put your bow on it'
            ],
            [
                'eyebrow' => 'APPLE INTELLIGENCE',
                'title' => 'Apple Intelligence and Siri AI. More personal. More powerful. Footnote 3',
                'description' => '',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-apple-intelligence-202609?wid=960&hei=1000&fmt=jpeg&qlt=90&.v=SFNxMjRYSTFLdjBJZG1UYjBKRUNDalZCM0g0MTRQL0NONjZoQUpUNEpyYVdEMXA0MWpoUGsyVlhVK0RESnBoeHAwckMxbExydC8yeDhtUjlFVHdKVnFPZGdrdkJYeDZmRHNaQ2JLUk0vWjZlZ1o3YzRHbjRxR1pKd2NYWGxuMTA',
                'image_alt' => 'Apple Intelligence features across iPhone, iPad and Mac',
                'link' => 'https://www.apple.com/in/apple-intelligence',
                'link_text' => 'Explore Apple Intelligence'
            ],
            [
                'eyebrow' => 'iCLOUD+',
                'title' => 'All the storage you need. Now with Apple TV and Apple Arcade included.',
                'description' => 'Footnote ≠',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-app-bundle-202609?wid=960&hei=1000&fmt=p-jpg&qlt=80&.v=SFNxMjRYSTFLdjBJZG1UYjBKRUNDaU9IMWMwRXFDeUFyak1WMkIvcHZlQWsrNUZoNXdjRTN6Qk9kZzJzT0IxWnZGdXpoZGFjcnJiZGtXTlNNRSszQWtaZmZmeUpnLzdsNC83dXlBbXdHQWdEdEVBVWpqbFN3VndaMFJJS01FN2c&traceId=1',
                'image_alt' => 'Apple services included with iCloud+',
                'link' => 'https://www.apple.com/in/icloud',
                'link_text' => 'Explore iCloud+'
            ],
            [
                'eyebrow' => 'APPLECARE+',
                'title' => 'We’ve got you covered.',
                'description' => 'AppleCare+ now comes with unlimited repairs for accidental damage protection.',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-50-applecare-202609?wid=960&hei=1000&fmt=webp&qlt=90&.v=SFNxMjRYSTFLdjBJZG1UYjBKRUNDZ0Z6cmtkamptY3RnWDhHQklKRlVnNEloZHRRYWt5UUpyTGVwNEhDZEV3VUZXZzlzM2cwVmJseGdsS3RYT09za2o4QTQyNkIyYjhUaHpLQkJ6cFFkQWQrYWpGdS9XeFgvbS9ITnNYOEhYaG4&traceId=1',
                'image_alt' => 'AppleCare+ coverage for Apple devices',
                'link' => 'https://www.apple.com/in/support/products',
                'link_text' => 'Explore AppleCare+'
            ]
        ]
    ],
    [
        'id' => 'savings-and-offers',
        'title' => 'Savings and offers.',
        'subtitle' => 'Exclusive deals, special stores and more.',
        'style' => 'savings',
        'cards' => [
            [
                'eyebrow' => 'EDUCATION',
                'title' => 'Save on a new Mac, iPad and Apple Watch with education pricing. Footnote',
                'title_is_link' => true,
                'description' => '',
                'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/store-card-40-education-202609?wid=800&hei=1000&fmt=webp&qlt=90&.v=TysyM3c4L0xvQ1dZWVNWTXZ0ekxPT3FZdktzMlZ6T240YVluQWFKYXhUcjkvamYzRzRvcFlnajNacmhEOC9BeEZXZzlzM2cwVmJseGdsS3RYT09za3ZERG1mS2EyUTN1Q09mUmN2RHljNUIrYWpGdS9XeFgvbS9ITnNYOEhYaG4&traceId=1',
                'image_alt' => 'Apple education products',
                'link' => 'https://www.apple.com/in/shop/education-pricing',
                'link_text' => ''
            ]
        ]
    ]
];