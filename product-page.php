<?php
require __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';
require __DIR__ . "/data.php";

// 1️⃣ Kontrollera att "product" finns i URL
?>

<?php
if (isset($_GET['product']) && isset($products[$_GET['product']])) {
    $productName = $_GET['product'];
    $product = $products[$productName];
    $colors = $product['colors'];

    // Hämta vald färg från URL, annars första färgen
    $selectedColor = $_GET['color'] ?? array_key_first($colors);

    // Säkerställ att vald färg finns
    if (!isset($colors[$selectedColor])) {
        $selectedColor = array_key_first($colors);
    }

    $currentImages = $colors[$selectedColor]['images'];
?>
    <section class="product-page-hero">
        <div class="product-cont">
            <section class="product-images">
                <?php
                $total = count($currentImages);
                $index = 1; // räknare

                foreach ($currentImages as $imageKey => $imagePath) { ?>
                    <div class="image-wrapper">
                        <img src="<?= $imagePath; ?>" alt="<?= $productName; ?> <?= $imageKey; ?>" />
                        <div class="page-number"><?= $index ?>/<?= $total ?></div>
                    </div>
                    <?php $index++; ?>
                <?php } ?>
            </section>

            <section class="product-detail">
                <h2><?= $productName; ?></h2>
                <p class="prize"><?= $product['prize']; ?></p>
                <p class="name"><?= $product['description']; ?></p>

                <?php if (count($colors) > 0) { ?>
                    <div class="color-picker-cont">
                        <section class="color-choice">
                            <div class="colors">
                                <p>Färg</p>
                                <div class="color-buttons">
                                    <?php foreach ($colors as $colorKey => $colorData) { ?>
                                        <a href="?product=<?= urlencode($productName); ?>&color=<?= urlencode($colorKey); ?>"
                                            class="color-btn <?= $colorKey; ?> <?= $colorKey === $selectedColor ? 'active' : ''; ?>">
                                            <span><?= $colorData['name']; ?></span>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="guide">
                                <div class="guide-size">
                                    <p>Storlek</p>
                                    <a>Guide</a>
                                </div>
                                <div class="size-button">
                                    <button>XS</button>
                                    <button>S</button>
                                    <button>M</button>
                                    <button>L</button>
                                    <button>XL</button>
                                </div>
                            </div>
                            <button class="basket">Lägg i varukorgen</button>
                        </section>
                    </div>
                <?php } ?>
            </section>
        </div>
    </section>

    <section class="section-prod-cont">
        <div class="prod-cont">
            <div class="THO-explore">
                <h3>Komplettera</h3>
                <a href="collection.php"><img src="assets/Pil.svg"></a>
            </div>

            <div class="product-carousel">
                <?php
                foreach ($products as $prodKey => $prodValue) { ?>
                    <section class="product">
                        <a href="product-page.php?product=<?= urlencode($prodKey); ?>" class="product-link">
                            <div class="product-image-wrapper">
                                <img src="<?= $prodValue['images']['default']; ?>" class="product-img-default" alt="<?= $prodKey; ?>" />
                                <img src="<?= $prodValue['images']['hover']; ?>" class="product-img-hover" alt="<?= $prodKey; ?>" />
                            </div>
                        </a>
                        <div class="product-info">
                            <p class="name"><?= $prodKey; ?></p>
                            <p class="prize"><?= $prodValue['prize']; ?></p>
                        </div>
                    </section>
                <?php } ?>
            </div>
        </div>
    </section>

<?php
} else {
    echo "<p>Produkten hittades inte.</p>";
}

require __DIR__ . '/newsletter.php';
require __DIR__ . '/footer.php';
