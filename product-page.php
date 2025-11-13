<?php
require_once __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';
require_once __DIR__ . "/data.php";
require_once __DIR__ . "/collection.php";
// 1️⃣ Kontrollera att "product" finns i URL
?>
<div class="product-carousel">
    <?php
    foreach ($products as $product => $value) { ?>
        <section class="product">
            <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
            <div class="product-info">
                <p class="name"><?= $product; ?></p>
                <p class="prize"><?= $value['prize'];
                                } ?></p>
            </div>
        </section>
        <?php
        if (!empty($_GET['product'])) {
            $productName = $_GET['product'];

            // 2️⃣ Kontrollera att produkten finns i arrayen
            if (isset($products[$productName])) {
                $product = $products[$productName];
            } else {
                echo "<h2>Produkten hittades inte!</h2>";
                exit;
            }
        } else {
            echo "<h2>Ingen produkt vald.</h2>";
            exit;
        }

        // 3️⃣ Använd htmlspecialchars vid utskrift i HTML
        $productNameEscaped = htmlspecialchars($productName);
        ?>

        <div class="product-detail">

            <h1><?= $productNameEscaped; ?></h1>

            <?php if (!empty($product['img1'])): ?>
                <img src="<?= $product['img1']; ?>" alt="<?= $productNameEscaped; ?> img1" />
            <?php endif; ?>


            <p><strong>Beskrivning:</strong> <?= htmlspecialchars($product['description']); ?></p>
            <p><strong>Pris:</strong> <?= htmlspecialchars($product['prize']); ?></p>

            <div class="gallery">
                <?php foreach (['img2', 'img3', 'img4', 'img5'] as $imgKey): ?>
                    <?php if (!empty($product[$imgKey])): ?>
                        <img src="<?= $product[$imgKey]; ?>" alt="<?= $productNameEscaped; ?> <?= $imgKey; ?>" />
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
        require __DIR__ . "/newsletter.php";
        require __DIR__ . "/footer.php";
        ?>