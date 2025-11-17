<?php
require __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';
require __DIR__ . "/data.php";

if (!isset($_GET['product']) || empty($_GET['product'])) {
    echo '<h2>Alla produkter</h2>';
    echo '<div class="products-list">';
    foreach ($products as $key => $value) {
        echo '<a href="product-page.php?product=' . urlencode($key) . '">';
        echo '<div class="product">';
        echo '<img src="' . $value['img1'] . '" alt="' . htmlspecialchars($key) . '">';
        echo '<p class="name">' . htmlspecialchars($key) . '</p>';
        echo '<p class="prize">' . $value['prize'] . '</p>';
        echo '</div>';
        echo '</a>';
    }
    echo '</div>';
    require __DIR__ . '/footer.php';
    exit;
}

$requested = mb_strtolower(trim($_GET['product']), 'UTF-8');

$matchedKey = null;
foreach ($products as $key => $value) {
    $cleanKey = mb_strtolower(trim($key), 'UTF-8');
    if ($cleanKey === $requested) {
        $matchedKey = $key; // behåll originalnyckeln
        break;
    }
}

if (!$matchedKey) {
    echo "<pre>Ingen match hittades för '$requested'. Tillgängliga keys:</pre>";
    print_r(array_keys($products));
    die("Produkten finns inte.");
}

$productName = htmlspecialchars($matchedKey, ENT_QUOTES, 'UTF-8');
$product = $products[$matchedKey];

?>

<section class="product-page-hero">
    <div class="carousel">

        <div class="carousel-images">

            <section class="product-images">
                <img src="<?= $product['img1']; ?>" alt="<?= $productName; ?> img1" class="carousel-slide active">
                <img src="<?= $product['img2']; ?>" alt="<?= $productName; ?> img2" class="carousel-slide">
                <img src="<?= $product['img3']; ?>" alt="<?= $productName; ?> img3" class="carousel-slide">
                <img src="<?= $product['img4']; ?>" alt="<?= $productName; ?> img4" class="carousel-slide">
                <img src="<?= $product['img5']; ?>" alt="<?= $productName; ?> img5" class="carousel-slide">
                <img src="<?= $product['img6']; ?>" alt="<?= $productName; ?> img6" class="carousel-slide">
            </section>


            <!-- Prickar för att visa vilken bild (valfritt) -->
            <div class="carousel-dots">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(1)"></span>
                <span class="dot" onclick="goToSlide(2)"></span>
                <span class="dot" onclick="goToSlide(3)"></span>
            </div>
        </div>
</section>

<section class="info-product">


    <!--<img src="/assets/Karbinhake_Orange_Framifran_9_10.png" alt="Bild 1" class="carousel-slide active">
            <img src="/assets/Karbinhake_Orange_Framifran-Oppen_Hake_9_10.png" alt="Bild 2" class="carousel-slide">
            <img src="/assets/Close_Up_Logga_Test_2.png" alt="Bild 3" class="carousel-slide">
            <img src="/assets/Close_Up_Logga_Test_3.png" alt="Bild 4" class="carousel-slide"> -->

    <section class="product-detail">
        <h2><?= $productName; ?></h2>
        <p class="prize"><?= $product['prize']; ?></p>
        <p class="name"><?= $product['description']; ?></p>
    </section>
    </div>

    <section class="THO">
        <div class="products-container">
            <div class="THO-explore">
                <h3>Utforska <span class="italic">TH&Oslash</span> kollektionen</h3>
                <a href="collection.php"><img src="/assets/Pil.svg"></a>
            </div>

            <div class="product-carousel">
                <?php
                foreach ($products as $productKey => $value) { ?>
                <a href="product-page.php?product=<?= urlencode($productKey); ?>">
                    <section class="product">
                        <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
                        <div class="product-info">
                            <p class="name"><?= $product; ?></p>
                            <p class="prize"><?= $value['prize']; ?></p>
                        </div>
                    </section>
                <?php
                }
                ?>
            </div>

            <?php
            require __DIR__ . '/newsletter.php';
            require __DIR__ . '/footer.php';
