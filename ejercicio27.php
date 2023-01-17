<?php
  //Static methods: Called without instance. Normally used in ORMs

  class unaClase {
    public static function unMetodo() {
    echo "Hola soy un metodo estatico<br/ >";
    }
  }

$obj = new unaClase();
$obj->unMetodo(); //Normal way

unaClase::unMetodo(); //Static method way

?>