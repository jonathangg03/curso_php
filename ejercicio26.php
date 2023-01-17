<?php
  //Constructor

  class personas{
    public $nombre;
    public $edad;
    protected $estatura;

    function __construct($nuevoNombre) { //CONSTRUCTOR
    $this->nombre = $nuevoNombre;
    }


    public function imprimirNombre() {
      echo "Hola soy ".$this->nombre." ";
    }

    public function mostrarEdad() {
      $this->edad = 23;
      return $this->edad;
    }
  }

  $objetoAlumno = new personas("Ana"); //If name is not setted, this will fail
  $objetoAlumno->imprimirNombre();

?>