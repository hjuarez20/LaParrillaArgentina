<?php
require  'medoo.php';

$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'laparrilla',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
]);
?>