<?php
  function imprimirNombre($nombre, $apellido='') { //apellido is optional cause we set a default value
    echo "Hola ".$nombre." ".$apellido."<br />";
  }

  imprimirNombre("Jonathan", "García");
  imprimirNombre("María");

  //Existent functions -> https://www.php.net/manual/es/funcref.php
  //Those are a lot of common functions that people use in apps
?>