<?php
	require_once ("../model/user.php");
	$loginUsuario = new Usuario();
	$usuario = $loginUsuario->usuario();
    require_once ("../view/principal.php");
   // header ("Location: ../view/principal.php");
                                                                     
?>