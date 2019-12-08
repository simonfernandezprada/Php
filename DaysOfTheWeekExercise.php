<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title></title>
  </head>
  <body>
    <?php
    $dayofweek = date("w");
    switch ($dayofweek) {
      case 1:
        echo "Lunedeichon";
        break;
      case 2:
        echo "Martedeichon";
        break;
      case 3:
        echo "Mierdoles";
        break;
      case 4:
        echo "Jueveins";
        break;
      case 5:
        echo "Liverday";
        break;
      case 6:
        echo "<p>Hangoverday</p>";
        break;
      case 0:
        echo "Resetday";
        break;
    }
     ?>
  </body>
</html>
