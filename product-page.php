<?php
require __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';
require __DIR__ . "/data.php";
require __DIR__ . "/datacopy.php";

// 1️⃣ Kontrollera att "product" finns i URL
?>

<?php
if (isset($_GET['product']) && isset($products[$_GET['product']])) {
    $productName = $_GET['product'];
    $product = $products[$productName];
    $colors = $product['colors'];

    // Standardfärg (första färgen)
    $firstColor = array_key_first($colors);
    $currentImages = $colors[$firstColor]['images'];
?>

    <section class="product-page-hero">
        <div class="product-cont">
            <section class="product-images">
                <?php foreach ($currentImages as $imageKey => $imagePath) { ?>
                    <img src="<?= $imagePath; ?>" alt="<?= $productName; ?> <?= $imageKey; ?>" />
                <?php } ?>
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

    <section class="section-prod-cont">
        <div class="prod-cont">
            <div class="THO-explore">
                <h3>Komplettera</h3>
                <a href="collection.php"><img src="assets/Pil.svg"></a>
            </div>

            <div class="product-carousel">
                <?php
                foreach ($products as $product => $value) { ?>
                    <section class="product">
                        <a href="product-page.php?product=<?= urlencode($product); ?>" class="product-link">
                            <div class="product-image-wrapper">
                                <img src="<?= $value['images']['default']; ?>" class="product-img-default" alt="<?= $product; ?>" />
                                <img src="<?= $value['images']['hover']; ?>" class="product-img-hover" alt="<?= $product; ?>" />
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


    <script>
        const productColors = <?= json_encode($product['colors']); ?>;
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const imgElements = document.querySelectorAll(".product-images img");
            const colorButtons = document.querySelectorAll(".color-buttons button");

            const colorMap = {
                'signal': 'orange',
                'ormbunke': 'green',
                'salvia': 'white'
            };

            // Markera första färgen som aktiv vid sidladdning
            if (colorButtons.length > 0) colorButtons[0].classList.add("active-color");

            colorButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const colorKey = Object.keys(colorMap).find(c => button.classList.contains(c));
                    if (!colorKey) return;

                    const dataKey = colorMap[colorKey];
                    const colorData = productColors[dataKey];
                    if (!colorData) return;

                    Object.values(colorData.images).forEach((src, index) => {
                        if (imgElements[index]) imgElements[index].src = src;
                    });

                    colorButtons.forEach(btn => btn.classList.remove("active-color"));
                    button.classList.add("active-color");
                });
            });
        });
    </script>

<?php
} else {
    echo "<p>Produkten hittades inte.</p>";
}
