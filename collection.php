<?php

require __DIR__ . "/header.php";
require __DIR__ . "/data.php";
?>

<div class="collection-container">
    <section class="sort-filter">
        <!-- sök-->
        <div class="categories-box">
            <div class="categories">
                <div class="category-frame-underlined">
                    <p>Allt</p>
                </div>
                <div class="category-frame">
                    <p>Jackor</p>
                </div>
                <div class="category-frame">
                    <p>Byxor</p>
                </div>
                <div class="category-frame">
                    <p>Verktyg</p>
                </div>
            </div>

            <div class="filter">
                <img src="/assets/Filter.svg" alt="filter-icon">
            </div>
        </div>
    </section>


    <section class="product-container">
        <div class="product-card">
            <?php
            foreach ($products as $product => $value) { ?>
                <a href="product-page.php?product=<?= $product; ?>" class="product-link">
                    <section class="product">
                        <img src="<?= $value['img1']; ?>" alt="<?= $product; ?> img1" />
                        <div class="product-info">
                            <p class="name"><?= $product; ?></p>
                            <p class="prize"><?= $value['prize']; ?></p>
                        </div>
                    </section>
                </a>
            <?php
            }
            ?>
        </div>
    </section>
</div>

<?php
require __DIR__ . "/newsletter.php";
require __DIR__ . "/footer.php";
?>