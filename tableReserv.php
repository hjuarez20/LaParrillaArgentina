<?php 
    require 'db/db.php';



  if($_POST){
         /*--------------date format transform----------*/
         $fecha=date("Y-m-d",strtotime($_POST["H"] ));
     
        $hour=$_POST["D"];
         
        $dbTables= $database->query("select 2-count(peopleAmount) mesas from tbreservations
                    where reservationHour='".$hour."' and
                    tbreservations.date='".$fecha."';")->fetchAll(PDO::FETCH_ASSOC);
      
      $array=array();
      
      $size=count($dbTables);
      
      /*--for for saving the data from database*/
      for($index=0;$index<$size;$index++){
          $array[$index]=$dbTables[$index]["mesas"];
      }
      
      
      if($array[0]>4){
          $lista=["1 Mesa","2 Mesas","3 Mesas","4 Mesas"];
          
        createJSON($lista);  
      }
      if($array[0]<4 and $array[0]>2){
          $lista=["1 Mesa","2 Mesas","3 Mesas"];
          
        createJSON($lista);  
      }
      
      if($array[0]<3 and $array[0]>1){
          $lista=["1 Mesa","2 Mesas"];
          
        createJSON($lista);  
      }
      
      if($array[0]<2){
          $lista=["1 Mesa"];          
        createJSON($lista);  
      }
      
}//end of if for method POST




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