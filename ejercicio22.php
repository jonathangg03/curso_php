<?php
  //Change array's values index
  $frutas = array("f" => "fresa", "m" => "manzana", "p" =>"pera");

  //now, we no access with 0,1,... we use f, m, p instead
  //if we don't define index, it will be from 0 to n
  print_r($frutas);


  echo "<br />";
  echo $frutas["m"]."<br />";

  foreach($frutas as $indice => &$fruta) {
    echo $indice."->".$fruta.'<br/>';
  }
?>