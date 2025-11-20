<?php
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kinforma</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="collection.css">
  <link rel="stylesheet" href="product-page.css">
  <link rel="stylesheet" href="sustainability.css">
  <link rel="stylesheet" href="newsletter.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="test.css">

</head>

<body>

  <header>
    <div class="container"></div>
    <div class="InaContainer"></div>
    <div class=""></div>
    <div class="lang-buttons">
      <button class="SV">
        <div>SV</div>
      </button>
      <button class="EN">
        <div>EN</div>
      </button>
    </div>

    <div class="backpack">
      <img src="/assets/shopping-cart.svg" alt="backpack">

    </div>

    <div class="logo">
      <a href="index.php">
        <img src="/logga/full-logga.png" alt="Kinforma Logo">
      </a>

    </div>

    <!-- Hamburger checkbox -->
    <input type="checkbox" id="menu-toggle">

    <!-- Hamburger ikon -->
    <label for="menu-toggle" class="menu-icon">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </label>

    <!-- Navigering -->
    <nav class="nav">
      <a href="index.php">Hem</a>
      <a href="about.php">Om oss</a>
      <a href="collection.php">Th&oslash 2026</a>
    </nav>



  </header>

</body>

</html>