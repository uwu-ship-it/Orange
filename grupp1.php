<?php
    $rating = '<form action="/action_page.php">
    <label for="point"></label>
    <select id="point" name="point">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </form>';
?>


<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupp 1</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
<header>
  <img id = "logga" src='grafik/ntil.jpg'>
</header>
<div class="sidenav">
  <a href="spelval.php">Spel</a>
  <a href="grupp1.php">Grupp1</a>
  <a href="grupp2.php">Grupp2</a>
  <a href="grupp3.php">Grupp3</a>
  <a href="grupp4.php">Grupp4</a>
  <a href="grupp5.php">Grupp5</a>
  <a href="#">Logga ut</a>
</div>

<div class = 'rating'>
  <p> DESIGN</p>
  <?= $rating; ?>
  <p> PROGRAMMERING </p>
  <?= $rating; ?>
  <p> ROLIGHET </p>
  <?= $rating; ?>
  <p> UPPFYLLER TEMA</p>
  <?= $rating; ?>
  <p> SPELBARHET </p>
  <?= $rating; ?>
  <p> KOPPLING TILL MATTE </p>
  <?= $rating; ?>
  <input type="submit">
</div>

</body>
</html>