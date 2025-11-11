<?php
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kinforma</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="collection.css">
  <link rel="stylesheet" href="product-page.css">
  <link rel="stylesheet" href="sustainability.css">
  <link rel="stylesheet" href="newsletter.css">
  <link rel="stylesheet" href="footer.css">

</head>

<body>

  <header>
    <div class="container"></div>
    <div class="InaContainer"></div>
    <div class=""></div>
 <div class="lang-buttons">
  <button class="SV"><div>SV</div></button>
  <button class="EN"><div>EN</div></button>
</div>

 <div class="logo">
  <img src="logga/text-logga.png" alt="Kinforma Logo">
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
      <a href="product-page.php">Produkter</a>
      <a href="#">Kontakta oss</a>
    </nav>

  
  
  </header>

</body>

</html>