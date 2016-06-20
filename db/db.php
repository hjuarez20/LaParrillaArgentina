<?php
  require "medoo.php";

        $database = new medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => 'laparrilla',
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'priscilla1234',
            'charset' => 'utf8'
        ]);
?>