<?php
  if($_POST) { //If something was sended to this file
    $nombre = $_POST['txtNombre']; //Receive data from an HTML form with POST method.
    echo 'Hola '.$nombre; //Concat with .
  }

  //TO CREATE A HTML FILE EASYLY, WRITE !
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="ejercicio2.php" method="get"><!--Send data to itself-->
    <input type="text" name="txtNombre">
    <br/>
    <button>Enviar</button>
  </form>
</body>
</html>