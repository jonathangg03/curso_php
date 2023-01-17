<?php
  if($_POST) {
    $boton = $_POST["btnValor"];

    switch($boton) {
      case 1:
        echo "El usuario presionó 1";
        break;
      case 2:
        echo "El usuario presionó 2";
        break;
      case 3:
        echo "El usuario presionó 3";
        break;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="ejercicio13.php" method="post">
    <input type="submit" value="1" name="btnValor">
    <br>
    <input type="submit" value="2" name="btnValor">
    <br>
    <input type="submit" value="3" name="btnValor">
  </form>
</body>
</html>