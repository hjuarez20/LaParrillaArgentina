<?php
require "db/db.php";

if($_POST){
    
    if($_POST["value"] == 1){
        $database->update("tbreservations",
                          ["date" => $_POST["date"],
                           "peopleAmount" => $_POST["peopleAmount"]],
                         ["idReservation" => $_POST["id"]]);
        header ("Location: principal.php#contReservation");
   }

   if($_POST["value"] == 3){
        $database->update("tbusers",
                          ["login" => $_POST["login"],
                           "peopleAmount" => $_POST["password"]],
                         ["idUser" => $_POST["id"]]);
        header ("Location: principal.php#contClient");
   }
    
}
if($_GET){
    $type = $_GET["type"]; 
    $id = $_GET["id"];
    if($type == 1){
       $data = $database->select("tbreservations", 
                                  ["date", 
                                   "peopleAmount", 
                                   "reservationHour", 
                                   "clientName",
                                   "idReservation"], [ "idReservation" => $id ]);

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
    <link rel="stylesheet" href="css/edittable.css">
    
</head>
<body>
 <div class=" col-xs-12 col-sm-12 col-md-4">
  <div class="container img1">
    <div class="container-data"> 
   <?php
   if($value == 1){
   echo "<form action='edittable.php' method='post'>
        <label class='labelStyle'>Nombre</label>
        <input class='inputStyle' readonly=”readonly” name='' value=".$data[0]["clientName"]."><br>
        <label class='labelStyle'>Cantidad mesas</label>
        <input class='inputStyle' name='peopleAmount' value=".$data[0]["peopleAmount"]."><br>
        <label class='labelStyle'>Hora de reservation</label>
        <input class='inputStyle' name='' value=".$data[0]["reservationHour"]."><br>
        <label class='labelStyle'>Fecha</label>
        <input class='inputStyle' name='date' value=".$data[0]["date"].">
        <input class='inputStyle' type='hidden' name='id' value=".$data[0]["idReservation"].">
        <input class='inputStyle' type='hidden' name='value' value=1>
        <br></br>
        <input id='buttom' type='submit' value='EDITAR'>
        <input id='buttom' type='button' value='CANCELAR' onclick='history.back();'>
    </form>";
   }
 
   if($value == 3){
    $password= md5($data[0]["password"]);
   echo "<form  action='edittable.php' method='post'>
        <label>Nombre</label>
        <input readonly='readonly' name='' value=".$data[0]["name"]."><br>
        <label>Cantidad mesas</label>
        <input name='password' value=".$password."><br>
        <label>Hora de reservation</label>
        <input readonly='readonly' name='' value=".$data[0]["identification"]."><br>
        <label>Nombre Usuario</label>
        <input name='login' value=".$data[0]["login"].">
        <input type='hidden' name='id' value=".$data[0]["idUser"].">
        <input type='hidden' name='value' value=3>
        <input type='submit' value='EDITAR'>
        <input type='button' value='CANCELAR' onclick='history.back();'>
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