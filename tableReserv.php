<?php 
    require 'db/db.php';

  if($_POST){
         
         $fecha=date("Y-m-d",strtotime($_POST["param"] ));
     
         $hour="08:00";
         
        $dbPeople= $database->query("select count(peopleAmount) mesas from tbreservations
                    where reservationHour='".$hour."' and
                    tbreservations.date='".$fecha."';")->fetchAll(PDO::FETCH_ASSOC);
         
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
?>