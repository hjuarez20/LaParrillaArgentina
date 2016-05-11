<?php
	require_once ("../model/user.php");
	$loginUsuario = new Usuario();
	$usuario = $loginUsuario->insertUser();
    require_once ("../view/login.php");
?>