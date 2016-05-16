<?php
   //require 'db.php';
class Consultdb{
    
    function _construct(){
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
        
    }
    
    public function listReservation(){
        $data = $database->select("tbreservations","*");
        return  $data;
    }
       
    public function insertReservation($peopleAmount, $clienteName, $clentePhone, $clientEmail, $date){
         $database->insert("tbreservations", [
            "peopleAmount" => $peopleAmount,
            "clientName" => $clienteName,
            "clientPhone" => $clentePhone,
            "clientEmail" => $clientEmail,
            "state" => 1,
            "date" => $date
          ]); 
    }
       
    public function insertUser($username, $password, $identification, $name){
         $database->insert("tbusers",[
          "login" => $username,
          "password" => $password,
          "identification" => $identification,
          "name" => $name
      ]);  
    }
       
    public function selectUser($username, $password){
         $query = $this->$database->select("tbusers","*"  
                                    ,["AND" =>[
                                     "login" => $username,
                                     "password" => $password 
                          ]]); 
        return $query;
    }
}


?>