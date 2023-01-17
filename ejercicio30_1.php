<?php
//This file is to show how session variables works

session_start();

if(isset($_SESSION["usuario"])) { //isset: shows if its param has data or not
  echo "Usuario: ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];
} else{
  echo "Usuario no logueado";
}

?>