<?php

if($_POST)  {
  $valorA = $_POST["valorA"];
  $valorB = $_POST["valorB"];

  if  (($valorA != $valorB) && ($valorA > $valorB)) {
    echo "El valor de A es diferente al valor de B";
  }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores aritmeticos</title>
</head>
<body>
  <form action="ejercicio10.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    Valor B:
    <input type="text" name="valorB" id="">

    <button>Calcular</button>
  </form>
</body>
</html>