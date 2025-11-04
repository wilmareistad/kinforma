<?php

require 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Kinforma</title>
</head>

<body>

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


</body>

</html>