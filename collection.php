<?php
require __DIR__ . '/header.php';
require __DIR__ . '/ten-percent.php';
require __DIR__ . '/data.php';

$searchQuery = strtolower($_GET['search'] ?? '');
$categoryFilter = strtolower($_GET['category'] ?? 'all');
?>

<div class="collection-container">
    <section class="tho-collection-frame">
        <h3>THØ KOLLEKTIONEN<span class="orange">.</span></h3>
        <p>THØ lanseras februari 2026 – en kollektion för tiden när naturen tinar men kylan dröjer sig kvar. Funktionella, hållbara plagg som funkar i skiftet mellan vinter och vår. Regenerativt mode möter tech-driven design, skapat för dig som vill utvecklas, leva aktivt och vara en del av något större</p>
    </section>
    <section class="sort-filter">
        <!-- Sökruta -->
        <form action="" method="GET" class="search-form">
            <div class="search-input-wrapper">
                <img src="assets/search-icon.svg" alt="Sök" class="search-icon">
                <input
                    type="text"
                    name="search"
                    placeholder="Jacka, Karbinhake, Vattenflaska.."
                    value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
            </div>
            <!-- Behåll category-filtret när man söker -->
            <?php if (isset($_GET['category'])): ?>
                <input type="hidden" name="category" value="<?= htmlspecialchars($_GET['category']) ?>">
            <?php endif; ?>
        </form>

        <!-- Filter/Kategorier -->
        <div class="categories-box">
            <div class="categories">
                <a href="?search=<?= urlencode($searchQuery) ?>&category=all"
                    class="category-frame<?= $categoryFilter === 'all' ? '-underlined' : '' ?>">
                    <p>Allt</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=kläder"
                    class="category-frame<?= $categoryFilter === 'kläder' ? '-underlined' : '' ?>">
                    <p>Kläder</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=beauty"
                    class="category-frame<?= $categoryFilter === 'beauty' ? '-underlined' : '' ?>">
                    <p>Beauty</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=accessoarer"
                    class="category-frame<?= $categoryFilter === 'accessoarer' ? '-underlined' : '' ?>">
                    <p>Accessoarer</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=merch"
                    class="category-frame<?= $categoryFilter === 'merch' ? '-underlined' : '' ?>">
                    <p>Merch</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=teknik"
                    class="category-frame<?= $categoryFilter === 'teknik' ? '-underlined' : '' ?>">
                    <p>Teknik</p>
                </a>
            </div>

            <div class="filter">
                <img src="assets/Filter.svg" alt="filter-icon">
            </div>
    </section>

    <section class="product-container">
        <div class="product-card">
            <?php
            $foundProducts = 0;

            foreach ($products as $product => $value) {
                $productName = strtolower($product);
                $productCategory = strtolower(trim($value['category']));

                // Filtrera efter sökning
                if ($searchQuery !== '' && stripos($productName, $searchQuery) === false) {
                    continue;
                }

                // Filtrera efter kategori
                if ($categoryFilter !== 'all' && $productCategory !== $categoryFilter) {
                    continue;
                }

                $foundProducts++;
            ?>

                <section class="collection-product">
                    <a href="product-page.php?product=<?= urlencode($product); ?>" class="product-link">
                        <div class="collection-img-wrapper">
                            <img src="<?= $value['images']['default']; ?>" class="collection-img-default" alt="<?= htmlspecialchars($product); ?> img2" />
                            <img src="<?= $value['images']['hover']; ?>" class="collection-img-hover" alt="<?= htmlspecialchars($product); ?> img1" />
                        </div>
                    </a>
                    <div class="product-inform">
                        <div class="name-heart">
                            <p class="name"><?= htmlspecialchars($product); ?></p>
                            <img src="assets/heart.svg"
                                alt="Favorit"
                                class="heart-icon"
                                onclick="this.classList.toggle('favorited')">
                        </div>
                        <p class="prize"><?= htmlspecialchars($value['prize']); ?></p>
                    </div>
                </section>

            <?php }
            if ($foundProducts === 0): ?>
                <div class="no-results">
                    <p>Inga produkter hittades<?php if ($searchQuery !== ''): ?> för "<?= htmlspecialchars($searchQuery) ?>"<?php endif; ?></p>
                    <a href="?" class="reset-link">Visa alla produkter</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>
<button class="button">Ladda fler</button>

<?php
require __DIR__ . "/newsletter.php";
require __DIR__ . "/footer.php";
?>