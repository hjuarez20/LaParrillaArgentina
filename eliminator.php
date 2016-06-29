<?php
require "db/db.php";


if($_POST){
    
     if($_POST["value"]==3){
        $database->update("tbusers",["state"=>"Desactivo" ],["idUser"=>$_POST["id"]]);
//echo $_POST["id"];
         header ("Location: principal.php#contClient");

    }
    if($_POST["value"] == 1){
        $database->update("tbreservations",
                          ["state" => 0],
                        ["idReservation" => $_POST["id"]]);
   header ("Location: principal.php#contReservation");

    }
    
    
}
if($_GET){
    $id=$_GET['id'];
    $type=$_GET['type'];
    
    if($type == 1){
        $data = $database -> select('tbreservations',
                                ['date',
                                 'peopleAmount',
                                 'reservationHour',
                                 'clientName',
                                 'idReservation',
                                  'state'],
                                 ['idReservation'=>$id]);
        if($data[0]['state']==1){
            $state="Activo";
        }else{
            $state="Terminado";
        }
        $value=1;
    }
    if($type == 3){
        $data = $database->select("tbusers", "*", ["idUser" => $id]);
        $value=3;
    }
    
    
}







?>
<html>

 <head>
        <title>Administar</title>
        
        
           <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/edittable.css">    
        
        
            
        
    </head>     
<body>
   
   <!--the variable $ value, serves to identify where the data
   and show the user . because they are different forms.-->
   <div class=" col-xs-12 col-sm-12 col-md-4">
    <div class="container img1">
    <div class="container-data"> 
    <?php
/*
    if($value==0){
            header ("Location: principal.php#contClient");

    }
*/
    
    if($value==1){
        echo "<form action='eliminator.php' method='post'>
        <div class='labelStyle'>
        
        
        
        
        <label>Nombre</label>
         <br></br>
        <label>Cantidad mesas</label>
         <br></br>
        <label>Hora de reservacion</label>
         <br></br>
        <label>Fecha</label>
        <br></br></br>
        <label>Estado</label>
        </div>
        <div>
        
        
        
        
        
        
        <input class='inputStyle' readonly=”readonly” name='' value=".$data[0]["clientName"]."><br>
        <input class='inputStyle' readonly='readonly' name='peopleAmount' value=".$data[0]["peopleAmount"]."><br>
        <input class='inputStyle' readonly='readonly' name='reservationHour' value=".$data[0]["reservationHour"]."><br>
        <input class='inputStyle' readonly='readonly' name='date' value=".$data[0]["date"].">
        </br>
        <input class='inputStyle' readonly='readonly' name='state' value=".$state.">
         <input type='hidden' name='id' value=".$data[0]["idReservation"].">
         </div>
        
        <input type='hidden' name='value' value=1>
        <input id='buttom'  type='submit' value='ELIMINAR'>
        <input id='buttom' type='button' value='CANCELAR' onclick='history.back();'>
            </form>";
    }
    
    if($value == 3){
   echo "
      <form  action='eliminator.php' method='post'>
      
      <div class='labelStyle'>
        <label>Nombre</label>
         <br></br>
        <label>Identificacion</label>
         <br></br>
        <label>Login</label>
   
        </div>
        <div>
        <input class='inputStyle' readonly='readonly' name='' value=".$data[0]["name"]."><br>
        <input class='inputStyle' readonly='readonly' name='identificacion' value=".$data[0]["identification"]."><br>
        <input class='inputStyle' readonly='readonly' name='login' value=".$data[0]["login"]."><br>
        <input class='inputStyle' type='hidden' name='id' value=".$data[0]["idUser"].">
        <input class='inputStyle' type='hidden' name='value' value=3>
        </div>
        <br></br>
        <input id='buttom' type='submit' value='ELIMINAR'>
        <input id='buttom' type='button' value='CANCELAR' onclick='history.back();'>
      </form>";
   }
    
    
    ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 footerStyle">
           <p>®Todos los derechos reservados - Proyecto Multimedios 2016</p>     
    </div>
    </div>
    </div>
    
</body>

</html>































