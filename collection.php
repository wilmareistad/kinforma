<?php

require __DIR__ . "/header.php";
require __DIR__ . "/data.php";

$searchQuery = strtolower($_GET['search'] ?? '');
$categoryFilter = strtolower($_GET['category'] ?? 'all');
?>

<div class="collection-container">
    <section class="sort-filter">
        <!-- Sökruta -->
        <form action="" method="GET" class="search-form">
            <div class="search-input-wrapper">
                <img src="/assets/search-icon.svg" alt="Sök" class="search-icon">
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
                <a href="?search=<?= urlencode($searchQuery) ?>&category=jackor"
                    class="category-frame<?= $categoryFilter === 'jackor' ? '-underlined' : '' ?>">
                    <p>Jackor</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=byxor"
                    class="category-frame<?= $categoryFilter === 'byxor' ? '-underlined' : '' ?>">
                    <p>Byxor</p>
                </a>
                <a href="?search=<?= urlencode($searchQuery) ?>&category=verktyg"
                    class="category-frame<?= $categoryFilter === 'verktyg' ? '-underlined' : '' ?>">
                    <p>Verktyg</p>
                </a>
            </div>

            <div class="filter">
                <img src="/assets/Filter.svg" alt="filter-icon">
            </div>
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
                <a href="product-page.php?product=<?= urlencode($product); ?>" class="product-link">
                    <section class="product">
                        <img src="<?= $value['img1']; ?>" alt="<?= htmlspecialchars($product); ?> img1" />
                        <div class="product-info">
                            <p class="name"><?= htmlspecialchars($product); ?></p>
                            <p class="prize"><?= htmlspecialchars($value['prize']); ?></p>
                        </div>
                    </section>
                </a>
            <?php } ?>

            <?php if ($foundProducts === 0): ?>
                <p class="no-results">Inga produkter hittades</p>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php
require __DIR__ . "/newsletter.php";
require __DIR__ . "/footer.php";
?>