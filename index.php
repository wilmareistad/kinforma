<?php

require __DIR__ . '/header.php';
require __DIR__ . '/ten-percent.php';
require __DIR__ . '/data.php';

?>

<section class="img-logo">
    <div class="tho-text">
        <p>Th&oslash</p>
        <p>Th&oslash</p>
        <p>Th&oslash</p>
    </div>
    <a href="/collection.php" class="hero-img-link">
        <img src="assets/KinformaHeroTest-noBG.gif">
    </a>
</section>

<section class="about">
    <div class="text-box">
        <h3>FRAMTIDENS MODE, <span class="special">IDAG</span><span class="orange">.</span></h3>
    </div>
    <div class="description-box">
        <p>Upplev en ny dimension av mode med vår senaste kollektion Thø. Designad av dig, drivet av teknik, skapat för planeten.</p>
    </div>
</section>

<section class="THO">
    <div class="products-container">
        <div class="THO-explore">
            <h3>Utforska <span class="italic">Th&oslash</span> kollektionen</h3>
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

<section class="sustainability-container">
    <img src="assets/OmKinforma.png" alt="Om Kinforma">
    <div class="sust-text">
        <h3>Innovation för en aktiv livsstil.</h3>
        <div class="a-frame">
            <a href="about.php">Om Kinforma</a>
        </div>
    </div>
</section>

<?php
require __DIR__ . '/newsletter.php';
require __DIR__ . '/footer.php';

/*=======

<div class="products-container">
    <h1>Thø</h1>
    <div class="list-box-container">
        <?php
        foreach ($products as $product => $value) { ?>
            <a href="product-page.php?product=<?= $product; ?>" class="product-link">
                <section>
                    <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
                    <p><?= $product; ?></p>

                </section>
            </a>
        <?php } ?>
    </div>
</div>
>>>>>>> main*/
