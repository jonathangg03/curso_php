<?php
session_start(); //Every time we have to use session variables

//Define session variables
$_SESSION["usuario"] = "jona";
$_SESSION["estatus"] = "logueado";

echo "Sesión iniciada"."<br />";

echo "Usuario: ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];

/*
  * The way we use session var is $_SESSION["name"];
  * We use session variable when we need to share a variable between different
  * files.
  * When you close the browser, those values get lost.
  * Those variables live on the server.
*/

?>