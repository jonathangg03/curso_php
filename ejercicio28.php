<?php
$servidor = "localhost"; //server IP
$usuario = "root";
$contraseña = ""; //Our DB has no pass

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //We need this to show errors, as parametters we have 2 static variables of PDO class
  
  $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');"; //Query
  $conexion->exec($sql); //Execute the query that is specified for params

  echo "Conexión establecida";
} catch(PDOException $error) {
  echo "Conexión erronea ".$error->getMessage();
}

/* 
  * PDO: Connect to a DB, PDO has to be turned on, on Xammp is enabled by default
  * if we don't use xammp, we need to learn how to turn it on
  * receive the nxt parameters: connection uri, user, and password
*/
?>