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
    <img src="/assets/d6efe9213f26c4c1fe907476e258e5c25a53fbb5.png">
</section>

<section class="about">
    <div class="text-box">
        <h3>Upplev en ny dimension av mode med vår senaste kollektion <span class="special">thø</span><span class="orange">.</span> Designad av <span class="special">dig</span>, drivet av <span class="special">teknik</span>, skapat för <span class="special">planeten</span><span class="orange">.</span></h3>
    </div>
    <div class="description-box">
        <p>Här ska det stå en mer förklarande text om Kinforma. Den ska inte vara så lång men den ska innehålla mer detaljerad info om märket.</p>
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
                    <div class="product-image-wrapper">
                        <img src="<?= $value['img1']; ?>" class="product-img-default" alt="<?= $product; ?>" />
                        <img src="<?= $value['img2']; ?>" class="product-img-hover" alt="<?= $product; ?>" />
                    </div>
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
    <img src="/assets/Hero_PW1_Gräslandskap.png" alt="Om oss">
    <div class="sust-text">
        <h3>Innovation till och för framtiden.</h3>
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
