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
  <link rel="stylesheet" href="newsletter.css">
  <link rel="stylesheet" href="footer.css">
</head>

<body>

  <header class="header">
    <div class="logo">Kinforma</div>

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
      <a href="#">Home</a>
      <a href="#">About us</a>
      <a href="#">Products</a>
      <a href="#">Contact</a>
    </nav>

    <!-- Översättningsknapp -->
    <button class="translate-btn">🌐 Översätt</button>
  </header>

</body>

</html>