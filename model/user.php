<?php 
include("../db/db.php");
 class Usuario{
  
    public function __construct(){
        
 
    }

  public function usuario(){
      
        $db1 = database::connect();
        $db2 = database::allUser($_POST['user'], md5($_POST['password']));
             //Si existe al menos una fila
            $len = count($db2);
             if( $len == 1  ){

               session_start();

               //Crear variable del nombre del usuario
               $_SESSION['User'] = $db2[0]['name'];
              //Crear una variable para indicar que se ha autenticado
               $_SESSION['autenticado'] = 'YES';
                //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
               $_SESSION['idUser'] = $db2[0]['idUser'];
             }  
      
  }

  public function insertUser(){
      $this->$consult->insertUser($_POST['username'], md5($_POST['password']), $_POST['identification'], $_POST['name']);
    }
  }

?>