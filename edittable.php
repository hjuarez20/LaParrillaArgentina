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
<body>
   <?php
   if($value == 1){
   echo "<form action='edittable.php' method='post'>
        <label>Nombre</label>
        <input readonly=”readonly” name='' value=".$data[0]["clientName"]."><br>
        <label>Cantidad mesas</label>
        <input name='peopleAmount' value=".$data[0]["peopleAmount"]."><br>
        <label>Hora de reservation</label>
        <input name='' value=".$data[0]["reservationHour"]."><br>
        <label>Fecha</label>
        <input name='date' value=".$data[0]["date"].">
        <input type='hidden' name='id' value=".$data[0]["idReservation"].">
        <input type='hidden' name='value' value=1>
        <input type='submit' value='EDITAR'>
        <input type='button' value='CANCELAR' onclick='history.back();'>
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
</body>
</html