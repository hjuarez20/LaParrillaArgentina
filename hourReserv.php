<?php 
/*The function is make the reservation*/
require 'db/db.php';

     if($_POST){
         
         $restCapacity=32;
         
         $fecha=date("Y-m-d",strtotime($_POST["param"] ));
     
          $dbHours=$database->query("select time from tbtime where 
        time not in(select reservationHour from tbreservations where date='".$fecha."' and tbreservations.peopleAmount>=".$restCapacity.");")->fetchAll(PDO::FETCH_ASSOC);
         
            createJSON($dbHours);
      
     }
/*------------this is a method that make the list of the hours to reserv-------------------*/
function createJSON($data){
        $len = count($data);
    
        for($i=0; $i<$len; $i++) {

            $item = new stdClass;
            $item->name = $data[$i]["time"];
            $items[] = $item;
        }
        echo json_encode($items);
    }

?>
