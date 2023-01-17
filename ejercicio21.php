<?php
  $frutas = array("fresa", "Pera", "Manzana");
  print_r($frutas);

  echo "<hr />".$frutas; //This won't work, only prints the word "Array"
  //But, with echo we can print values from the string

  echo '<br/>'.$frutas[0];

    for ($indice=0; $indice<3; $indice++) {
    echo "<br/>".$frutas[$indice];
  }
?>