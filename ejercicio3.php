<?php
  if($_GET) {
    $nombre=$_GET['nombre'];//Receive data sended in other files by get method
    echo "Hola ".$nombre;
  }

  // The diff between get and post is that post hide data
  // You can use any of those inside or outside the php file.
?>