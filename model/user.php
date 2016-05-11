<?php 

/*
include('../db/db.php');
*/
 class Usuario{
  

    public function __construct(){
      
    }

  public function usuario(){
      require '../db/db.php'; 
        $pw = md5($_POST['password']);
        $query = $database->select("tbusers","*"  
                          ,["AND" =>[
                              "login" => $_POST['user'],
                              "password" => $pw 
                          ]]); 

         //Si existe al menos una fila
        $len = count($query);
         if( $len > 0  ){
          
           session_start();
            
           //Crear variable del nombre del usuario
           $_SESSION['User'] = $query[0]['name'];
          //Crear una variable para indicar que se ha autenticado
           $_SESSION['autenticado'] = 'YES';
            //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
           $_SESSION['idUser'] = $query[0]['idUser'];
         }   
  }

  public function insertUser(){
      require '../db/db.php';
      
      $database->insert("tbusers",[
          "login" => $_POST['username'],
          "password" => md5($_POST['password']),
          "identification" => $_POST['identification'],
          "name" => $_POST['name']
      ]);
    }
  }

?>