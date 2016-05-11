<?php
/* include('../db/db.php');*/
class Reservations{
  
/*
  private $data;
*/
 
    public function insertReservation(){
        require '../db/db.php'; 
        $database->insert("tbreservations", [
            "peopleAmount" => $_POST["peopleAmount"],
            "clientName" => $_POST["clientName"],
            "clientPhone" => $_POST["clientPhone"],
            "clientEmail" => $_POST["clientEmail"],
            "state" => 1,
            "date" => $_POST["date"]
        ]); 
    }
    
    public function selectReservation(){
       
        
        $query = $database->select("tbreservations","*");
        /*$len = count($query);
        for($i=0; $i>$len; $i++){
            $this->data[]=$query[i]
        }*/
                /*return $this->data;*/
        return $query;
    }
}

?>