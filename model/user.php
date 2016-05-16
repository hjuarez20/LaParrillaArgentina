<?php 
  include("../db/query.php");

 class Usuario{
  
    
     
    public function __construct(){
     
    }

  public function usuario(){
    $consult = new Consultdb();
     $data = $consult->selectUser($_POST['user'], md5($_POST['password']));
         //Si existe al menos una fila
        $len = count($data);
         if( $len > 0  ){
          
           session_start();
            
           //Crear variable del nombre del usuario
           $_SESSION['User'] = $data[0]['name'];
          //Crear una variable para indicar que se ha autenticado
           $_SESSION['autenticado'] = 'YES';
            //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
           $_SESSION['idUser'] = $data[0]['idUser'];
         }  
      
  }

  public function insertUser(){
      $this->$consult->insertUser($_POST['username'], md5($_POST['password']), $_POST['identification'], $_POST['name']);
    }
  }

?>