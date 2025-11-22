<section class="color-choice">
    <div class="colors">
        <p>Färg</p>
        <div class="color-buttons">
            <?php foreach ($colorsForTemplate as $colorKey => $colorData) { ?>

                href="?product=<?= urlencode($productNameForTemplate); ?>&color=<?= urlencode($colorKey); ?>"
                class="color-btn <?= $colorKey; ?> <?= $colorKey === $selectedColorForTemplate ? 'active' : ''; ?>">
                <span><?= ucfirst($colorKey); ?></span>
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="guide">
        <div class="guide-size">
            <p>Storlek</p>
            <a>Guide</a>
        </div>
        <div class="size-button">
            <button>XS</button>
            <button>S</button>
            <button>M</button>
            <button>L</button>
            <button>XL</button>
        </div>
    </div>
    <button class="basket">Lägg i varukorgen</button>
</section>



<!--<section class="color-choice">
    <div class="colors">
        <p>Färg</p>
        <div class="color-buttons">
            <button class="signal"><span>Signal</span></button>
            <button class="ormbunke"><span>Ormbunke</span></button>
            <button class="salvia"><span>Salvia</span></button>
        </div>
    </div>
    <div class="guide">
        <div class="guide-size">
            <p>Storlek</p>
            <a>Guide</a>
        </div>
        <div class="size-button">
            <button>XS</button>
            <button>S</button>
            <button>M</button>
            <button>L</button>
            <button>XL</button>
        </div>
    </div>
    <button class="basket">Lägg i varukorgen</button>
</section>


//product-page.php av Wilma:
/*require __DIR__ . "/datacopy.php";*/
// Standardfärg (första färgen)
    $firstColor = array_key_first($colors);
    $currentImages = $colors[$firstColor]['images'];
?>
<div class="color-picker-cont">
                    <?php
                    require __DIR__ . "/test.php";
                    ?>
                </div>
            </section>
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
    </script>-->