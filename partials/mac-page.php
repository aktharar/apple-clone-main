<section class="mac-intro" id="mac-top">
    <div class="mac-intro-inner">
        <p class="mac-eyebrow">Meet the Mac family</p>
        <h1>Mac.</h1>
        <p>Find the Mac that fits the way you work, create and live.</p>
    </div>
</section>

<nav class="mac-subnav" aria-label="Mac product navigation">
    <div class="mac-subnav-inner">
        <?php foreach ($macLineup as $macProduct): ?>
            <a class="mac-subnav-product" href="#<?= escapeCategoryText($macProduct['id']) ?>">
                <img src="<?= escapeCategoryText($macProduct['image']) ?>" alt="">
                <span><?= escapeCategoryText($macProduct['name']) ?></span>
                <?php if ($macProduct['badge'] !== ''): ?>
                    <small><?= escapeCategoryText($macProduct['badge']) ?></small>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
        <a class="mac-subnav-link" href="#mac-lineup">Compare Mac</a>
        <a class="mac-subnav-link" href="#mac-accessories">Accessories</a>
    </div>
</nav>

<section class="mac-lineup-section" id="mac-lineup">
    <header class="mac-section-heading">
        <div>
            <p class="mac-eyebrow">Explore the line-up</p>
            <h2>Find your Mac.</h2>
        </div>
        <p>Portable laptops, capable desktops and displays for your workspace.</p>
    </header>

    <div class="mac-filter-list" role="group" aria-label="Filter Mac products">
        <button class="mac-filter is-active" type="button" data-mac-filter="all" aria-pressed="true">All products</button>
        <button class="mac-filter" type="button" data-mac-filter="laptop" aria-pressed="false">Laptops</button>
        <button class="mac-filter" type="button" data-mac-filter="desktop" aria-pressed="false">Desktops</button>
        <button class="mac-filter" type="button" data-mac-filter="display" aria-pressed="false">Displays</button>
    </div>

    <div class="mac-product-grid">
        <?php foreach ($macLineup as $macProduct): ?>
            <article class="mac-product-card" id="<?= escapeCategoryText($macProduct['id']) ?>"
                     data-mac-type="<?= escapeCategoryText($macProduct['type']) ?>">
                <div class="mac-product-art">
                    <?php if ($macProduct['badge'] !== ''): ?>
                        <span class="mac-product-badge"><?= escapeCategoryText($macProduct['badge']) ?></span>
                    <?php endif; ?>
                    <img src="<?= escapeCategoryText($macProduct['image']) ?>"
                         alt="<?= escapeCategoryText($macProduct['name']) ?>"
                         loading="lazy">
                </div>
                <div class="mac-product-details">
                    <?php if ($macProduct['colors'] !== []): ?>
                        <div class="mac-color-list" aria-label="Available colours">
                            <?php foreach ($macProduct['colors'] as $color): ?>
                                <span><?= escapeCategoryText($color) ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <h3><?= escapeCategoryText($macProduct['name']) ?></h3>
                    <p class="mac-product-description"><?= escapeCategoryText($macProduct['description']) ?></p>
                    <p class="mac-product-price">From <?= escapeCategoryText($macProduct['price']) ?><sup>**</sup></p>
                    <p class="mac-monthly-price">or <?= escapeCategoryText($macProduct['monthly']) ?>/mo. for 12 months.<sup>*</sup></p>
                    <div class="mac-product-actions">
                        <a class="mac-learn-link" href="#<?= escapeCategoryText($macProduct['id']) ?>">Learn more</a>
                        <a class="mac-buy-link" href="#mac-payment">Buy</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mac-benefits-section" id="mac-benefits">
    <header class="mac-section-heading">
        <div>
            <p class="mac-eyebrow">A little more help</p>
            <h2>Why Apple is the best place to buy Mac.</h2>
        </div>
        <p>Payment options, setup help and more, all in one place.</p>
    </header>
    <article class="mac-financing-card" id="mac-payment">
        <div class="mac-financing-copy">
            <p class="mac-eyebrow">Ways to buy</p>
            <h3>Monthly payment options are available.</h3>
            <p>Choose an easy way to finance with convenient payment options from participating card providers. Eligibility and terms apply.</p>
            <a href="#mac-pricing">Learn more about payment options</a>
        </div>
        <img src="images/credit-card.svg" alt="Illustration of a payment card" loading="lazy">
    </article>
    <div class="mac-benefit-grid">
        <?php foreach ($macBuyingBenefits as $benefit): ?>
            <?php $benefitId = substr($benefit['url'], 1); ?>
            <?php if ($benefitId === 'mac-payment') { continue; } ?>
            <article class="mac-benefit-card" id="<?= escapeCategoryText($benefitId) ?>">
                <span class="mac-benefit-mark" aria-hidden="true">✳</span>
                <h3><?= escapeCategoryText($benefit['title']) ?></h3>
                <p><?= escapeCategoryText($benefit['description']) ?></p>
                <a href="<?= escapeCategoryText($benefit['url']) ?>"><?= escapeCategoryText($benefit['link']) ?></a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mac-features-section" id="mac-features">
    <header class="mac-section-heading">
        <div>
            <p class="mac-eyebrow">Get to know Mac</p>
            <h2>Get to know Mac.</h2>
        </div>
        <a class="mac-text-link" href="#mac-ecosystem">See how Mac works with your other devices</a>
    </header>
    <div class="mac-feature-grid">
        <?php foreach ($macFeatures as $feature): ?>
            <article class="mac-feature-card">
                <div class="mac-feature-art">
                    <img src="<?= escapeCategoryText($feature['image']) ?>" alt="" loading="lazy">
                </div>
                <div class="mac-feature-copy">
                    <p class="mac-eyebrow"><?= escapeCategoryText($feature['eyebrow']) ?></p>
                    <h3><?= escapeCategoryText($feature['title']) ?></h3>
                    <p><?= escapeCategoryText($feature['description']) ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mac-switch-section" id="switch-to-mac">
    <div class="mac-switch-inner">
        <div>
            <p class="mac-eyebrow">New to Mac?</p>
            <h2>Switch to Mac.</h2>
            <p>Get familiar with your new Mac, move important files and discover everyday shortcuts with helpful setup resources.</p>
            <a class="mac-primary-link" href="#mac-setup">Explore Personal Setup <span aria-hidden="true">›</span></a>
        </div>
        <img src="images/macbook-neo.svg" alt="Illustration of a Mac laptop" loading="lazy">
    </div>
</section>

<section class="mac-accessories-section" id="mac-accessories">
    <header class="mac-section-heading">
        <div>
            <p class="mac-eyebrow">Mac essentials</p>
            <h2>Mac essentials.</h2>
        </div>
        <a class="mac-text-link" href="category.php?category=accessories">Shop Mac accessories</a>
    </header>
    <div class="mac-accessory-grid">
        <article class="mac-accessory-card">
            <img src="images/accessories.svg" alt="Illustration of computer accessories" loading="lazy">
            <div>
                <p class="mac-eyebrow">Everyday essentials</p>
                <h3>Keyboards, mice and more.</h3>
                <p>Explore practical additions for a workspace that feels right for you.</p>
                <a href="category.php?category=accessories">Shop Mac accessories</a>
            </div>
        </article>
        <article class="mac-accessory-card mac-display-card">
            <img src="images/studio-display.svg" alt="Illustration of a Mac display" loading="lazy">
            <div>
                <p class="mac-eyebrow">A bigger view</p>
                <h3>Meet Studio Display.</h3>
                <p>Add a high-resolution display to your Mac desk setup.</p>
                <a href="#studio-display">Explore displays</a>
            </div>
        </article>
    </div>
</section>

<section class="mac-ecosystem-section" id="mac-ecosystem">
    <header class="mac-section-heading">
        <div>
            <p class="mac-eyebrow">Unlock more together</p>
            <h2>Unlock the world of Apple.</h2>
        </div>
        <p>Explore ways supported features connect Mac with other devices.</p>
    </header>
    <div class="mac-ecosystem-grid">
        <?php foreach ($macEcosystem as $ecosystemItem): ?>
            <article class="mac-ecosystem-card">
                <img src="<?= escapeCategoryText($ecosystemItem['image']) ?>" alt="" loading="lazy">
                <h3><?= escapeCategoryText($ecosystemItem['title']) ?></h3>
                <p><?= escapeCategoryText($ecosystemItem['description']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="mac-pricing-note" id="mac-pricing">
    <p><sup>*</sup> Monthly payment examples are estimates for 12-month financing; eligibility, final pricing and terms depend on the payment provider.</p>
    <p><sup>**</sup> Prices are sample starting prices in Indian rupees and may change. Confirm current product configurations and pricing before purchase.</p>
    <p>Trade-in availability, education pricing, delivery options and payment offers depend on eligibility and location.</p>
</section>
