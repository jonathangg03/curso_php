<?php
//This file is to show how session variables works

session_start();

echo "Usuario: ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];
?>