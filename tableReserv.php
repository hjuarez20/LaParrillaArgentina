<?php 
    require 'db/db.php';



  if($_POST){
         
         $fecha=date("Y-m-d",strtotime($_POST["H"] ));
     
         $hour=$_POST["D"];
         
        $dbTables= $database->query("select 32-count(peopleAmount) mesas from tbreservations
                    where reservationHour='".$hour."' and
                    tbreservations.date='".$fecha."';")->fetchAll(PDO::FETCH_ASSOC);
      
      $array=array();
      
      $size=count($dbTables);
      
      for($index=0;$index<$size;$index++){
          $array[$index]=$dbTables[$index]["mesas"];
      }
      
      
      if($array[0]>4){
          $lista=["1 Mesa","2 Mesas","3 Mesas","4 Mesas"];
          
        createJSON($lista);  
      }
      
      
      //createJSON($array);
     }




/*------------this is a method that make the list of the hours to reserv-------------------*/
function createJSON($data){
        $len = count($data);
    
        for($i=0; $i<$len; $i++) {

            $item = new stdClass;
            $item->name = $data[$i];
            $items[] = $item;
        }
        echo json_encode($items);
    }

?>
?>