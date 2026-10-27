<?php
$storeMenuCategoriesById = [];
foreach ($categories as $storeCategoryItem) {
    $storeMenuCategoriesById[$storeCategoryItem['id']] = $storeCategoryItem;
}
$storeMenuCategoryOrder = ['mac', 'ipad', 'iphone', 'watch', 'airpods', 'home', 'accessories'];
$megaMenuCategoryIdsByTitle = [
    'Mac' => 'mac',
    'iPad' => 'ipad',
    'iPhone' => 'iphone',
    'Watch' => 'watch',
    'AirPods' => 'airpods',
    'Home' => 'home',
    'Entertainment' => 'home',
    'Accessories' => 'accessories',
    'Support' => 'iphone'
];
?>
<header class="apple-nav">
    <div class="nav-container">
        <a class="nav-logo" href="index.php" aria-label="Apple Store home">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M16.6 12.8c0-2.3 1.9-3.4 2-3.5-1.1-1.6-2.8-1.8-3.4-1.8-1.4-.1-2.8.8-3.6.8-.7 0-1.9-.8-3.1-.7-1.6 0-3.1.9-3.9 2.3-1.7 2.9-.4 7.1 1.2 9.4.8 1.1 1.7 2.4 2.9 2.3 1.2 0 1.6-.7 3-.7s1.8.7 3.1.7c1.3 0 2.1-1.2 2.9-2.4.9-1.3 1.2-2.6 1.2-2.7-.1 0-2.3-.9-2.3-3.7ZM14.3 6c.6-.8 1-1.9.9-3-1 .1-2.2.7-2.9 1.5-.6.7-1.1 1.8-1 2.9 1.1.1 2.3-.6 3-1.4Z"/>
            </svg>
        </a>

        <nav class="nav-menu" aria-label="Main navigation">
            <?php foreach ($navItems as $nav): ?>
                <?php if ($nav['title'] === 'Store'): ?>
                    <div class="nav-store-menu" id="nav-store-menu">
                        <a class="nav-link" href="<?= htmlspecialchars($nav['url'], ENT_QUOTES, 'UTF-8') ?>">Store</a>
                        <button class="nav-menu-toggle nav-store-toggle" id="store-menu-toggle"
                                type="button" aria-label="Open Store menu" aria-expanded="false"
                                aria-controls="store-dropdown"></button>
                        <div class="store-dropdown" id="store-dropdown">
                            <div class="store-dropdown-inner">
                                <section class="store-dropdown-shop">
                                    <h2>Shop</h2>
                                    <a class="store-dropdown-featured" href="index.php#latest">Shop the Latest</a>
                                    <nav class="store-dropdown-categories" aria-label="Shop categories">
                                        <?php foreach ($storeMenuCategoryOrder as $storeMenuCategoryId): ?>
                                            <?php $storeCategoryItem = $storeMenuCategoriesById[$storeMenuCategoryId]; ?>
                                            <a href="<?= htmlspecialchars($storeCategoryItem['url'], ENT_QUOTES, 'UTF-8') ?>">
                                                <?= htmlspecialchars($storeCategoryItem['name'], ENT_QUOTES, 'UTF-8') ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </nav>
                                </section>
                                <section class="store-dropdown-quick">
                                    <h2>Quick Links</h2>
                                    <?php foreach ($storeQuickLinks as $quickLink): ?>
                                        <a href="<?= htmlspecialchars($quickLink['url'], ENT_QUOTES, 'UTF-8') ?>">
                                            <?= htmlspecialchars($quickLink['title'], ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                    <?php endforeach; ?>
                                    <a class="store-dropdown-shop-link" href="index.php#latest">Shop</a>
                                </section>
                            </div>
                        </div>
                    </div>
                <?php elseif (isset($megaMenus[$nav['title']])): ?>
                    <?php
                    $megaMenu = $megaMenus[$nav['title']];
                    $megaMenuCategoryId = $megaMenuCategoryIdsByTitle[$nav['title']];
                    $megaMenuUrl = 'category.php?category=' . rawurlencode($megaMenuCategoryId);
                    $megaMenuPanelId = 'mega-dropdown-' . strtolower(preg_replace('/[^a-z0-9]+/i', '-', $nav['title']));
                    ?>
                    <div class="nav-mega-item">
                        <a class="nav-link" href="<?= htmlspecialchars($nav['url'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($nav['title'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                        <button class="nav-menu-toggle nav-mega-toggle" type="button"
                                aria-label="Open <?= htmlspecialchars($nav['title'], ENT_QUOTES, 'UTF-8') ?> menu"
                                aria-expanded="false" aria-controls="<?= htmlspecialchars($megaMenuPanelId, ENT_QUOTES, 'UTF-8') ?>"></button>
                        <div class="mega-dropdown" id="<?= htmlspecialchars($megaMenuPanelId, ENT_QUOTES, 'UTF-8') ?>">
                            <div class="mega-dropdown-inner">
                                <section class="mega-dropdown-heading">
                                    <h2>Explore <?= htmlspecialchars($nav['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                                    <a class="mega-dropdown-all" href="<?= htmlspecialchars($megaMenuUrl, ENT_QUOTES, 'UTF-8') ?>">
                                        Explore All <?= htmlspecialchars($nav['title'], ENT_QUOTES, 'UTF-8') ?>
                                    </a>
                                </section>
                                <?php foreach (['explore' => 'Explore', 'shop' => 'Shop', 'more' => 'More from ' . $nav['title']] as $groupKey => $groupTitle): ?>
                                    <section class="mega-dropdown-column">
                                        <h3><?= htmlspecialchars($groupTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                                        <ul>
                                            <?php foreach ($megaMenu[$groupKey] as $linkTitle): ?>
                                                <?php
                                                $linkUrl = $megaMenuUrl;
                                                if ($linkTitle === 'Festive Offer') {
                                                    $linkUrl = 'index.php#joy-starts-here';
                                                } elseif (in_array($linkTitle, ['Ways to Buy', 'Apple Trade In'], true)) {
                                                    $linkUrl = 'index.php#savings-and-offers';
                                                } elseif ($linkTitle === 'Personal Setup') {
                                                    $linkUrl = 'index.php#store-difference';
                                                } elseif ($linkTitle === 'Shop the Latest') {
                                                    $linkUrl = 'index.php#latest';
                                                }
                                                ?>
                                                <li>
                                                    <a href="<?= htmlspecialchars($linkUrl, ENT_QUOTES, 'UTF-8') ?>">
                                                        <?= htmlspecialchars($linkTitle, ENT_QUOTES, 'UTF-8') ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </section>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <a class="nav-link" href="<?= htmlspecialchars($nav['url'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($nav['title'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>

        <div class="nav-actions">
            <button class="nav-action icon-button" id="search-toggle"
                    type="button" aria-label="Search products"
                    aria-expanded="false" aria-controls="search-panel">
                <svg class="icon-svg" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="10.8" cy="10.8" r="6.5"/>
                    <path d="m16 16 4.5 4.5"/>
                </svg>
            </button>
            <a class="nav-action" href="cart.php" aria-label="Shopping bag">
                <svg class="icon-svg" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 8h14l-1 13H6L5 8Z"/>
                    <path d="M9 8V6a3 3 0 0 1 6 0v2"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="search-panel" id="search-panel" hidden>
        <label class="visually-hidden" for="product-search">Search products</label>
        <input id="product-search" type="search"
               placeholder="Search products..."
               autocomplete="off">
        <button class="search-close" type="button" id="search-close">Close</button>
    </div>
</header>
