<?php

require 'data.php';
?>

<!--Se till att fonten ni använder stödjer ø-tecknet (de flesta moderna fonter gör det)
Om ni ska ha det på webben, kan ni använda HTML-koden: &oslash; för ø eller &Oslash; för Ø
I CSS/text: bara kopiera in ø direkt-->

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