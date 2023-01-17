<?php

if($_POST)  {
  $valorA = $_POST["valorA"];
  $valorB = $_POST["valorB"];

  //Suma
  $suma = $valorA + $valorB;
  $resta = $valorA - $valorB;
  $mult = $valorA / $valorB;
  $division = $valorA * $valorB;
  
  echo "<br/>".$suma;
  echo "<br/>".$resta;
  echo "<br/>".$mult;
  echo "<br/>".$division;

  if($valorA == $valorB) { //Compare
    echo "El valor dee A es mayor al valor de B";

    if($valorA == 4) {
      echo "El valor es 4 ";
    }

    if($valorA == 5) {
      echo "El valor es 4";
    }
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
  <form action="ejercicio11.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    Valor B:
    <input type="text" name="valorB" id="">

    <button>Calcular</button>
  </form>
</body>
</html>