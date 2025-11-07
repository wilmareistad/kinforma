<?php
require __DIR__ . "/header.php";
require __DIR__ . "/data.php";

$productName = $_GET['product'];
$product = $products[$productName];
?>

<div class="product-detail">
    <h1><?= $productName; ?></h1>
    <img src="<?= $product['img1']; ?>" alt="<?= $productName; ?> img1" />

    <p><strong>Beskrivning:</strong> <?= $product['description']; ?></p>

    <p><strong>Pris:</strong> <?= $product['prize']; ?></p>

    <img src="<?= $product['img2']; ?>" alt="<?= $productName; ?> img2" />
    <img src="<?= $product['img3']; ?>" alt="<?= $productName; ?> img3" />
    <img src="<?= $product['img4']; ?>" alt="<?= $productName; ?> img4" />
    <img src="<?= $product['img5']; ?>" alt="<?= $productName; ?> img5" />
</div>

<!--Loopa igenom array i data.php för info om enskilda produkter

<?php
require __DIR__ . "/newsletter.php";
require __DIR__ . "/footer.php";
