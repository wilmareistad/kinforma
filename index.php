<?php

require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
require 'data.php';

?>

<!--Se till att fonten ni använder stödjer ø-tecknet (de flesta moderna fonter gör det)
Om ni ska ha det på webben, kan ni använda HTML-koden: &oslash; för ø eller &Oslash; för Ø
I CSS/text: bara kopiera in ø direkt-->

<section class="hero-container">
    <img src="assets/Hero_PW1_Gräslandskap.png" alt="Hero img">
    <!-- <img src="assets/Jacka2hero.png" class="jacket"> -->
    <div class="hero-text">
        <p class="spring">Vår 2026</p>
        <p class="collection-name">Th&oslash;</p>
        <p class="future">Framtidens mode, idag.</p>
    </div>
</section>

<section class="about">
    <div class="text-box">
        <p>Upplev en ny dimension av mode med vår senaste kollektion <span class="special">thø</span><span class="orange">.</span> Designad av <span class="special">dig</span>, drivet av <span class="special">teknik</span>, skapat för <span class="special">planeten</span><span class="orange">.</span></p>
    </div>
</section>

<section class="THO">
    <div class="products-container">
        <div class="THO-explore">
            <h3>Utforska <span class="italic">TH&Oslash</span> kollektionen</h3>
            <a href="collection.php"><img src="/assets/Pil.svg"></a>
        </div>

        <div class="product-carousel">
            <?php
            foreach ($products as $product => $value) { ?>
                <section class="product">
                    <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
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
    <img src="/assets/Karbinhake_WIP 2.png" alt="Hållbarhet">
    <div class="sust-text">
        <h3>Innovation till och för framtiden.</h3>
        <div class="p-frame">
            <p>Våra arbetssätt</p>
        </div>
    </div>
</section>

<section class="about-kin">
    <img src="/assets/Jacka4.png" alt="Hållbarhet">
    <div class="sust-text">
        <h3>Om Kinforma.</h3>
        <div class="p-frame">
            <p>Läs mer</p>
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
