<?php
/* include('../db/db.php');*/
class Reservations{
  
/*
  private $data;
*/
 
    public function insertReservation(){
        require '../db/db.php'; 
       
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