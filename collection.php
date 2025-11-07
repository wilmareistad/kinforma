<?php
foreach ($products as $product => $value) { ?>
    <a href="product-page.php?product=<?= $product; ?>" class="product-link">
        <section class="product">
            <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
            <p><?= $product; ?></p>
            <p>><?= $value['prize']; ?></p>
        </section>
    </a>
<?php } ?>