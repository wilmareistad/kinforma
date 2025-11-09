<?php
require __DIR__ . "/header.php";
require __DIR__ . "/data.php";
?>
<link rel="stylesheet" href="sustainability.css">

<section class="sustainability-hero">
    <p class="sustainability">Hållbarhet</p>
    <img class="team" src="https://qualityoutlet.com/wp-content/uploads/2025/03/RevolutionRace.2.1.jpg" alt="bild på teamet">
</section>
<section>
    <h2>SMART TEXTIL</h2>
    <p>Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
    <img class="team more" src="https://qualityoutlet.com/wp-content/uploads/2025/03/RevolutionRace.2.1.jpg" alt="bild på material">
    <h2>HÅLLBART MODE</h2>
    <p>Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
    <img class="team more" src="https://qualityoutlet.com/wp-content/uploads/2025/03/RevolutionRace.2.1.jpg" alt="bild på material">
    <h2>MATERIAL</h2>
    <p>Upplev en ny dimension av mode med vår senaste kollektion. Designad av dig, drivet av teknik, skapat för planeten.</p>
</section>

<section class="THO">
    <div class="products-container">
        <div class="THO-explore">
            <h3>Utforska TH&Oslash</h3>
            <a href="collection.php"><img src="/assets/Pil.svg"></a>
        </div>

        <div class="product-carousel">
            <?php
            foreach ($products as $product => $value) { ?>
                <section class="product">
                    <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
                    <div class="product-info">
                        <p><?= $product; ?></p>
                        <p><?= $value['prize']; ?></p>
                    </div>
                </section>
            <?php } ?>
        </div>
    </div>
</section>

<?php
require __DIR__ . "/newsletter.php";
require __DIR__ . "/footer.php";
?>
=======

//Hållbarhet - info om hur företaget arbetar med detta