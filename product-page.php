<?php
require __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';
require __DIR__ . "/data.php";

// 1️⃣ Kontrollera att "product" finns i URL
?>

<?php
$productName = $_GET['product'];
$product = $products[$productName];
?>

<section class="product-page-hero">
    <div class="product-cont">
        <section class="product-images">
            <img src="<?= $product['img1']; ?>" alt="<?= $productName; ?> img1" />
            <img src="<?= $product['img2']; ?>" alt="<?= $productName; ?> img2" />
            <img src="<?= $product['img3']; ?>" alt="<?= $productName; ?> img3" />
            <img src="<?= $product['img4']; ?>" alt="<?= $productName; ?> img4" />
            <img src="<?= $product['img5']; ?>" alt="<?= $productName; ?> img5" />
            <img src="<?= $product['img6']; ?>" alt="<?= $productName; ?> img6" />
        </section>

        <section class="product-detail">
            <h2><?= $productName; ?></h2>
            <p class="prize"><?= $product['prize']; ?></p>
            <p class="name"><?= $product['description']; ?></p>
            <div class="color-picker-cont">
                <?php
                require __DIR__ . "/test.php";
                ?>
            </div>
        </section>
    </div>
</section>



<section class="THO">
    <div class="products-container">
        <div class="THO-explore">
            <h3>Komplettera</h3>
            <a href="collection.php"><img src="/assets/Pil.svg"></a>
        </div>

        <div class="product-carousel">
            <?php
            foreach ($products as $product => $value) { ?>
                <section class="product">
                    <a href="product-page.php?product=<?= urlencode($product); ?>" class="product-link">
                        <div class="product-image-wrapper">
                            <img src="<?= $value['img1']; ?>" class="product-img-default" alt="<?= $product; ?>" />
                            <img src="<?= $value['img2']; ?>" class="product-img-hover" alt="<?= $product; ?>" />
                        </div>
                    </a>
                    <div class="product-info">
                        <p class="name"><?= $product; ?></p>
                        <p class="prize"><?= $value['prize']; ?></p>
                    </div>
                </section>
            <?php } ?>
        </div>
    </div>
</section>


<?php
require __DIR__ . '/newsletter.php';
require __DIR__ . '/footer.php';
