<?php

$edad = 32;

echo $edad.'<br/>';

$edad = 40; //variables

echo $edad."<br/>";

//constants
define("NOMBRE", "OSCAR");

echo NOMBRE;

define("edad", 24);

echo edad; //Without $ sign

define("NOMBRE", "Jonathan"); //This won't change

echo NOMBRE;

?>