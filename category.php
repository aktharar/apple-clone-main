<?php
require_once __DIR__ . '/data.php';

$categoryId = $_GET['category'] ?? '';
if (!is_string($categoryId) || !isset($categoryPages[$categoryId])) {
    http_response_code(404);
    $pageTitle = 'Category not found';
    $category = null;
} else {
    $category = $categoryPages[$categoryId];
    $pageTitle = $category['title'];
}

function escapeCategoryText(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= escapeCategoryText($pageTitle) ?> | Apple Store Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require __DIR__ . '/partials/header.php'; ?>

    <?php if ($category === null): ?>
        <main class="category-not-found">
            <h1>That collection could not be found.</h1>
            <p>Choose a collection from the store to keep exploring.</p>
            <a class="card-btn" href="index.php#store">Back to Store</a>
        </main>
    <?php else: ?>
        <main>
            <?php if ($categoryId === 'mac'): ?>
                <?php require __DIR__ . '/partials/mac-page.php'; ?>
            <?php else: ?>
            <nav class="category-switcher" aria-label="Product collections">
                <?php foreach ($categories as $item): ?>
                    <a href="<?= escapeCategoryText($item['url']) ?>"
                       class="category-switcher-item<?= $item['id'] === $categoryId ? ' is-current' : '' ?>"
                       <?= $item['id'] === $categoryId ? 'aria-current="page"' : '' ?>>
                        <img src="<?= escapeCategoryText($item['image']) ?>" alt="">
                        <span><?= escapeCategoryText($item['name']) ?></span>
                    </a>
                <?php endforeach; ?>
            </nav>

            <section class="category-page-hero">
                <div class="category-page-hero-inner">
                    <div class="category-page-copy">
                        <p class="category-eyebrow">Explore the collection</p>
                        <h1><?= escapeCategoryText($category['headline']) ?></h1>
                        <p class="category-page-description"><?= escapeCategoryText($category['description']) ?></p>
                        <a class="category-back-link" href="index.php#store">Back to Store <span aria-hidden="true">←</span></a>
                    </div>
                    <div class="category-page-art">
                        <img src="<?= escapeCategoryText($category['image']) ?>" alt="<?= escapeCategoryText($category['title']) ?>">
                    </div>
                </div>
            </section>

            <section class="category-products" id="category-products">
                <header class="category-products-heading">
                    <div>
                        <p class="category-eyebrow">The collection</p>
                        <h2>Explore <?= escapeCategoryText($category['title']) ?>.</h2>
                    </div>
                    <p>Find the right fit for your everyday.</p>
                </header>

                <div class="category-product-grid">
                    <?php foreach ($category['products'] as $product): ?>
                        <article class="category-product-card">
                            <div class="category-product-image">
                                <img src="<?= escapeCategoryText($category['image']) ?>"
                                     alt="<?= escapeCategoryText($product['name']) ?>"
                                     loading="lazy">
                            </div>
                            <div class="category-product-info">
                                <h3><?= escapeCategoryText($product['name']) ?></h3>
                                <p><?= escapeCategoryText($product['description']) ?></p>
                                <span class="category-product-price"><?= escapeCategoryText($product['price']) ?></span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>
        </main>
    <?php endif; ?>

    <?php require __DIR__ . '/partials/quick-links.php'; ?>
    <?php require __DIR__ . '/partials/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
