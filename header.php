<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburgermeny på desktop</title>
  <link rel="stylesheet" href="header.css">
</head>
<body>

  <header class="header">
    <div class="logo">Kinforma</div>

    <!-- Checkboxen styr menyn -->
    <input type="checkbox" id="menu-toggle">

    <!-- Hamburgarikonen -->
    <label for="menu-toggle" class="menu-icon">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </label>

    <!-- Själva menyn -->
    <nav class="nav">
      <a href="#">Home</a>
      <a href="#">About us</a>
      <a href="#">Product</a>
      <a href="#">Contact</a>
    </nav>
  </header>

</body>
</html>
