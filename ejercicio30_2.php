<?php
session_start(); //Need to start session before destroy it
session_destroy();

echo "Se cerro la sesión del usuario";

/* 
  * If we go to this file and return to ejercicio30_1 we will see that
  * nothing is rendered, cause we destroyed the session, and de variables
  * are created in the session that we start on file ejercicio30.php
*/

?>