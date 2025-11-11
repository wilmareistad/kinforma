<?php
require __DIR__ . "/header.php";
require __DIR__ . "/data.php";
require __DIR__ . "/collection.php";
// 1️⃣ Kontrollera att "product" finns i URL
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
        <?php foreach (['img2','img3','img4','img5'] as $imgKey): ?>
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
