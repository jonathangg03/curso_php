<?php
$servidor = "localhost"; //server IP
$usuario = "root";
$contraseña = ""; //Our DB has no pass

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //We need this to show errors, as parametters we have 2 static variables of PDO class


  
  $sql = "SELECT * FROM `fotos`;"; //Query
  $sentencia = $conexion->prepare($sql); //To get data from DB we need to prepare the sentence we are going to use

  $sentencia->execute(); //then, excecute that sentence

  $resultado = $sentencia->fetchAll(); //from that sentence, we have to get data
  
  print_r($resultado); //that data comes in an array

  echo "<hr />";

  foreach($resultado as $foto) { //Printe the name of each foto
    print_r($foto['nombre']);
    echo "<br />";
  }

  echo "Conexión establecida";
} catch(PDOException $error) {
  echo "Conexión erronea ".$error->getMessage();
}
?>