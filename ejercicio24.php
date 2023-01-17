<?php
  //classes: Like a template

  class persona{
    public $nombre; //public property

    public $edad; //private property: Cannot be accesed for the instance, only inside the class

    protected $estatura; //Can be accesed only inside the class or by inherid classes.

    public function asignarNombre($nuevoNombre) { //methods
      $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre() {
      echo "Hola soy ".$this->nombre." ";
    }

    public function obtenerEdad() {
      $this->edad = 23;
      return $this->edad;
    }
  }

  $objetoAlumno = new persona(); //Instance
  $objetoAlumno->asignarNombre("José");
  $objetoAlumno->imprimirNombre();
  // echo $objetoAlumno->nombre;
  // echo $objetoAlumno->edad; <- private won't end the program if called
  // echo $objetoAlumno->estatura; <- protected this will end the program if called
  echo $objetoAlumno->obtenerEdad();

  /*
    * Resuming:
    * Property: [visibility] $propertyName;
    * Method: public function methodName(){}
    * Call prop (or method) of instance: $instanceName->prop/method
    * Call a property inside Class body: $this->property
  */


?>