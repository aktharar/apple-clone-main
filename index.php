<?php
// Load data from data.php
require_once __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require __DIR__ . '/partials/header.php'; ?>

    <!-- 2. Announcement Ribbon -->
    <aside class="ribbon-banner">
        <span><?= htmlspecialchars($announcement['highlight']) ?></span>
        <a href="<?= htmlspecialchars($announcement['link_url']) ?>">
            <?= htmlspecialchars($announcement['link_text']) ?> <span class="icon-circle-arrow">⊕</span>
        </a>
    </aside>

    <!-- 3. Hero Section -->
    <section class="store-hero" id="store">
        <div class="hero-content">
            <div class="hero-left">
                <h1 class="store-title">Store</h1>
            </div>
            <div class="hero-right">
                <h2 class="joy-headline">Spread joy with the<br>products you love.</h2>
                <div class="hero-links">
                    <a href="javascript:void(0)" onclick="openSpecialistChat()" class="hero-link-item">
                        Connect with a Specialist <span class="arrow-external">&#x2197;</span>
                    </a>
                    <a href="#find-store" class="hero-link-item">
                        Find an Apple Store <span class="arrow-external">&#x2197;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Product Categories (Mac, iPhone, iPad, Watch, etc.) -->
    <section class="category-section">
        <div class="category-row">
            <?php foreach ($categories as $cat): ?>
                <a href="<?= htmlspecialchars($cat['url'], ENT_QUOTES, 'UTF-8') ?>" class="category-item">
                    <div class="category-thumb">
                        <img src="<?= htmlspecialchars($cat['image']) ?>" alt="<?= htmlspecialchars($cat['alt']) ?>">
                    </div>
                    <span class="category-label"><?= htmlspecialchars($cat['name']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 5. "The latest" Section -->
    <section class="latest-section" id="latest">
        <div class="section-header">
            <h2 class="section-title">
                <span class="title-accent">The latest.</span> 
                <span class="title-muted">Meet the new arrivals this season.</span>
            </h2>
        </div>
        <div class="latest-carousel">
            <button class="carousel-arrow carousel-arrow-previous" type="button"
                    data-carousel-direction="-1" aria-label="Show previous products"
                    aria-controls="latest-products" disabled>
                <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m12.5 3.5-6.5 6.5 6.5 6.5"/></svg>
            </button>
            <div class="cards-grid" id="latest-products" aria-label="Latest products">
                <?php foreach ($latestProducts as $product): ?>
                    <article class="product-card" id="<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <div class="card-top">
                            <span class="card-badge"><?= htmlspecialchars($product['badge']) ?></span>
                            <h3 class="card-title"><?= htmlspecialchars($product['title']) ?></h3>
                            <p class="card-subtitle"><?= htmlspecialchars($product['subtitle']) ?></p>
                        </div>
                        <div class="card-bottom">
                            <?php if ($product['price'] !== ''): ?>
                                <span class="card-price"><?= htmlspecialchars($product['price']) ?></span>
                            <?php endif; ?>
                            <a href="<?= htmlspecialchars($product['link']) ?>" class="card-btn">
                                <?= htmlspecialchars($product['button_text'] ?? 'Buy', ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </div>
                        <div class="card-image-box">
                            <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>"
                                 alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>"
                                 loading="lazy">
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <button class="carousel-arrow carousel-arrow-next" type="button"
                    data-carousel-direction="1" aria-label="Show next products"
                    aria-controls="latest-products">
                <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m7.5 3.5 6.5 6.5-6.5 6.5"/></svg>
            </button>
        </div>
    </section>

    <?php foreach ($storeStorySections as $section): ?>
        <?php $productCarousel = in_array($section['id'], ['store-difference', 'tune-in-to-joy', 'store-accessories', 'apple-experience'], true); ?>
        <?php
            $productCarouselId = [
                'store-difference' => 'difference-products',
                'tune-in-to-joy' => 'sound-products',
                'store-accessories' => 'accessory-products',
                'apple-experience' => 'experience-products'
            ][$section['id']] ?? '';
        ?>
        <section class="store-story-section store-story-<?= htmlspecialchars($section['style'], ENT_QUOTES, 'UTF-8') ?>"
                 id="<?= htmlspecialchars($section['id'], ENT_QUOTES, 'UTF-8') ?>">
            <div class="story-section-inner">
                <header class="story-section-header">
                    <h2>
                        <span class="<?= !empty($section['accent_title']) ? 'story-section-title-accent' : '' ?>">
                            <?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?>
                        </span>
                        <span class="story-section-subtitle"><?= htmlspecialchars($section['subtitle'], ENT_QUOTES, 'UTF-8') ?></span>
                    </h2>
                </header>
                <?php if ($productCarousel): ?>
                    <div class="story-carousel">
                        <button class="carousel-arrow carousel-arrow-previous" type="button"
                                data-carousel-direction="-1" aria-label="Show previous products"
                                aria-controls="<?= htmlspecialchars($productCarouselId, ENT_QUOTES, 'UTF-8') ?>" disabled>
                            <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m12.5 3.5-6.5 6.5 6.5 6.5"/></svg>
                        </button>
                <?php endif; ?>
                <div class="story-card-grid<?= $productCarousel ? ' sound-card-grid' : '' ?>"
                     <?= $productCarousel ? 'id="' . htmlspecialchars($productCarouselId, ENT_QUOTES, 'UTF-8') . '" data-story-carousel-track' : '' ?>
                     <?= $section['id'] === 'store-difference' ? 'data-carousel-step="page"' : '' ?>>
                    <?php foreach ($section['cards'] as $cardIndex => $card): ?>
                        <?php $image = $card['image'] ?? ''; ?>
                        <?php $video = $card['video'] ?? ''; ?>
                        <?php $imageFirst = $section['id'] === 'tune-in-to-joy' && $cardIndex !== 0; ?>
                        <article class="story-card<?= $image === '' && $video === '' ? ' story-card-text-only' : '' ?><?= $section['id'] === 'tune-in-to-joy' && $cardIndex === count($section['cards']) - 2 ? ' story-card-image-first' : '' ?>">
                            <?php if ($imageFirst && ($image !== '' || $video !== '')): ?>
                                <div class="story-card-art">
                                    <?php if ($video !== ''): ?>
                                        <video autoplay muted loop playsinline preload="metadata" aria-hidden="true">
                                            <source src="<?= htmlspecialchars($video, ENT_QUOTES, 'UTF-8') ?>" type="video/mp4">
                                        </video>
                                    <?php else: ?>
                                        <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>"
                                             alt="<?= htmlspecialchars($card['image_alt'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                                             loading="lazy">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="story-card-copy">
                                <?php if ($card['eyebrow'] !== ''): ?>
                                    <span class="story-card-eyebrow"><?= htmlspecialchars($card['eyebrow'], ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                                <h3>
                                    <?php if (!empty($card['title_is_link'])): ?>
                                        <a class="story-card-title-link" href="<?= htmlspecialchars($card['link'], ENT_QUOTES, 'UTF-8') ?>">
                                            <?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                    <?php else: ?>
                                        <?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8') ?>
                                    <?php endif; ?>
                                </h3>
                                <?php if ($card['description'] !== ''): ?>
                                    <p><?= htmlspecialchars($card['description'], ENT_QUOTES, 'UTF-8') ?></p>
                                <?php endif; ?>
                                <?php if (!empty($card['colors'])): ?>
                                    <ul class="story-card-colors" aria-label="Available colours">
                                        <?php foreach ($card['colors'] as $color): ?>
                                            <li>
                                                <img src="<?= htmlspecialchars($color['image'], ENT_QUOTES, 'UTF-8') ?>"
                                                     alt="<?= htmlspecialchars($color['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                     title="<?= htmlspecialchars($color['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                     loading="lazy">
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <?php if (empty($card['title_is_link'])): ?>
                                    <a href="<?= htmlspecialchars($card['link'], ENT_QUOTES, 'UTF-8') ?>">
                                        <?= htmlspecialchars($card['link_text'], ENT_QUOTES, 'UTF-8') ?>
                                        <span aria-hidden="true">›</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <?php if (!$imageFirst && ($image !== '' || $video !== '')): ?>
                                <div class="story-card-art">
                                    <?php if ($video !== ''): ?>
                                        <video autoplay muted loop playsinline preload="metadata" aria-hidden="true">
                                            <source src="<?= htmlspecialchars($video, ENT_QUOTES, 'UTF-8') ?>" type="video/mp4">
                                        </video>
                                    <?php else: ?>
                                        <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>"
                                             alt="<?= htmlspecialchars($card['image_alt'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                                             loading="lazy">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                    <?php if ($section['id'] === 'store-difference'): ?>
                        <nav class="store-difference-assistance difference-assistance-panel" aria-label="Apple Store shopping assistance">
                            <ul>
                                <?php foreach ($section['cards'][3]['additional_links'] as $additionalLink): ?>
                                    <li>
                                        <a href="<?= htmlspecialchars($additionalLink['url'], ENT_QUOTES, 'UTF-8') ?>">
                                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                                <?php if ($additionalLink['icon'] === 'mac'): ?>
                                                    <rect x="3.5" y="4.5" width="17" height="12" rx="1.5"/><path d="M2.5 19.5h19M9 16.5l-.8 3m6.8-3 .8 3"/>
                                                <?php elseif ($additionalLink['icon'] === 'store'): ?>
                                                    <path d="M4 9.5h16l-1 11H5l-1-11ZM3 9.5l2-6h14l2 6M9 9.5v11m6-11v11"/>
                                                <?php elseif ($additionalLink['icon'] === 'trade'): ?>
                                                    <path d="M7 7h10l-2.5-2.5M17 17H7l2.5 2.5M17 7l2.5-2.5M7 17l-2.5 2.5"/>
                                                <?php elseif ($additionalLink['icon'] === 'delivery'): ?>
                                                    <path d="M2.5 6.5h12v11h-12zM14.5 10h4l3 3v4h-7z"/><circle cx="7" cy="18.5" r="1.8"/><circle cx="18" cy="18.5" r="1.8"/>
                                                <?php elseif ($additionalLink['icon'] === 'setup'): ?>
                                                    <path d="M12 3.5v3m0 11v3m8.5-8.5h-3m-11 0h-3m14.01-6.01-2.12 2.12m-7.78 7.78-2.12 2.12m12.02 0-2.12-2.12m-7.78-7.78L6.49 6.99"/><circle cx="12" cy="12" r="4"/>
                                                <?php else: ?>
                                                    <path d="M4 7.5h16v12H4zM8 7.5V5a4 4 0 0 1 8 0v2.5M8 13h8m-4-3v6"/>
                                                <?php endif; ?>
                                            </svg>
                                            <span><?= htmlspecialchars($additionalLink['text'], ENT_QUOTES, 'UTF-8') ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
                <?php if ($productCarousel): ?>
                        <button class="carousel-arrow carousel-arrow-next" type="button"
                                data-carousel-direction="1" aria-label="Show more products"
                                aria-controls="<?= htmlspecialchars($productCarouselId, ENT_QUOTES, 'UTF-8') ?>">
                            <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m7.5 3.5 6.5 6.5-6.5 6.5"/></svg>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endforeach; ?>

    <!-- 6. Floating Specialist Avatar (Bottom Right) -->
    <div class="specialist-floating">
        <div class="specialist-bubble" onclick="openSpecialistChat()">
            Need shopping help?
        </div>
        <button class="specialist-avatar-btn" onclick="openSpecialistChat()" title="Chat with an Apple Specialist">
            <img src="images/specialist.svg" alt="Shopping specialist">
        </button>
    </div>

    <?php require __DIR__ . '/partials/quick-links.php'; ?>
    <?php require __DIR__ . '/partials/footer.php'; ?>

    <script src="js/script.js"></script>
    <script>
        function openSpecialistChat() {
            alert("👋 Hello! Welcome to the Apple Store. An Apple Specialist will be with you shortly!");
        }
    </script>
</body>
</html>