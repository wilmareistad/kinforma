<?php
require __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';
require __DIR__ . "/data.php";

// 1️⃣ Kontrollera att "product" finns i URL
?>
<section class="product-page-hero">
    <div class="carousel">

        <div class="carousel-images">
            <img src="/assets/Karbinhake_Orange_Framifran_9_10.png" alt="Bild 1" class="carousel-slide active">
            <img src="/assets/Karbinhake_Orange_Framifran-Oppen_Hake_9_10.png" alt="Bild 2" class="carousel-slide">
            <img src="/assets/Close_Up_Logga_Test_2.png" alt="Bild 3" class="carousel-slide">
            <img src="/assets/Close_Up_Logga_Test_3.png" alt="Bild 4" class="carousel-slide">
            <img src="/assets/Close_Up_Logga_Test_3.png" alt="Bild 5" class="carousel-slide">
            <img src="/assets/Close_Up_Logga_Test_3.png" alt="Bild 6" class="carousel-slide">
        </div>

        <!-- Prickar för att visa vilken bild (valfritt) -->
        <div class="carousel-dots">
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
            <span class="dot" onclick="goToSlide(4)"></span>
            <span class="dot" onclick="goToSlide(5)"></span>
        </div>
    </div>
</section>

<section class="info-product">

    <?php
    $productName = $_GET['product'];
    $product = $products[$productName];
    ?>

    <div class="product-cont">
        <!--<section class="product-images">
            <img src="<?= $product['img1']; ?>" alt="<?= $productName; ?> img1" />
            <img src="<?= $product['img2']; ?>" alt="<?= $productName; ?> img2" />
            <img src="<?= $product['img3']; ?>" alt="<?= $productName; ?> img3" />
            <img src="<?= $product['img4']; ?>" alt="<?= $productName; ?> img4" />
            <img src="<?= $product['img5']; ?>" alt="<?= $productName; ?> img5" />
            <img src="<?= $product['img6']; ?>" alt="<?= $productName; ?> img6" />
        </section>-->

        <section class="product-detail">
            <h2><?= $productName; ?></h2>
            <p class="prize"><?= $product['prize']; ?></p>
            <p class="name"><?= $product['description']; ?></p>
        </section>
    </div>
</section>

<section class="THO">
    <div class="products-container">
        <div class="THO-explore">
            <h3>Utforska <span class="italic">Th&oslash</span> kollektionen</h3>
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
