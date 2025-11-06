<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>

<!--Se till att fonten ni använder stödjer ø-tecknet (de flesta moderna fonter gör det)
Om ni ska ha det på webben, kan ni använda HTML-koden: &oslash; för ø eller &Oslash; för Ø
I CSS/text: bara kopiera in ø direkt-->
<section class="hero-container">
    <img src="" alt="Hero img">
    <div class="hero-text">
        <p class="spring">Vår 2026</p>
        <p class="collection-name">Th&oslash;</p>
        <p class="future">Framtidens mode, idag.</p>
    </div>
</section>

<section class="about">
    <h2>OM KINFORMA</h2>
    <p>Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
</section>

<div class="products-container">
    <h1>Thø</h1>
    <div class="list-box-container">
        <?php
        foreach ($products as $product => $value) { ?>
            <a href="product-page.php?product=<?= $product; ?>" class="product-link">
                <section class="product">
                    <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
                    <p><?= $product; ?></p>

                </section>
            </a>
        <?php } ?>
    </div>
</div>

<?php

require __DIR__ . '/newsletter.php';
require __DIR__ . '/footer.php';
