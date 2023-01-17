<?php
  //Inheritance

  class persona{
    public $nombre;

    public $edad;

    protected $estatura;

    public function asignarNombre($nuevoNombre) {
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

  $objetoAlumno = new persona();
  $objetoAlumno->asignarNombre("José");
  $objetoAlumno->imprimirNombre();
  echo $objetoAlumno->obtenerEdad()."<br />";

class trabajador extends persona {
  public $puesto;

  public function presentarComoTrabajador() {
    echo "Hola, soy ".$this->nombre." y soy un ".$this->puesto;
  }
}

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Jonathan");
$objTrabajador->puesto = "programador"; //This way yo can also asign a value to a prop
$objTrabajador->presentarComoTrabajador();

?>