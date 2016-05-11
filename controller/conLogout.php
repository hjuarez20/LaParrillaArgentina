<?php

session_start();
// Destruye todas las variables de la sesion
session_unset();
// Finalmente, destruye la sesion
session_destroy();
 
//Redireccionar a la pagina de login
header ("Location: ../view/index.php");
 
?>