<?php
require "db/db.php";
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
    if($type == 2){
        echo "hola menu";
        $value=2;
    }
    if($type == 3){
        $data = $database->select("tbusers", "*", ["idUser" => $id]);
        $value=3;
    }
}

if($_POST){
   /* $id= $_GET['idedit'];
    if($id == 1){*/
        $dataBase->update("tbreservations",
                          ["date" => $_POST["date"],
                           "peopleAmount" => $_POST["peopleAmount"]],
                         ["idReservation" => $_POST["id"]]);
       // header ("Location: principal.php");
   // }
}
?>
<html>
<body>
   <?php
   if($value == 1){
   echo "<form action='edittable.php' method='post'>
        <label>Nombre</label>
        <input name='' value=".$data[0]["clientName"]."><br>
        <label>Cantidad mesas</label>
        <input name='peopleAmount' value=".$data[0]["peopleAmount"]."><br>
        <label>Hora de reservation</label>
        <input name='' value=".$data[0]["reservationHour"]."><br>
        <label>Estado</label>
        <input name='date' value=".$data[0]["date"].">
        <input type='hidden' name='id' value=".$data[0]["idReservation"].">
        <input type='submit' value='EDITAR'>
        <input type='button' value='CANCELAR' onclick='history.back();'>
    </form>";
   }
    
   if($value == 2){
   echo "<form action='edittable.php?id=1'>
        <label>Nombre</label>
        <input name='' value=".$data[0]["clientName"]."><br>
        <label>Cantidad mesas</label>
        <input name='' value=".$data[0]["peopleAmount"]."><br>
        <label>Hora de reservation</label>
        <input name='' value=".$data[0]["reservationHour"]."><br>
        <label>Estado</label>
        <input name='' value=".$data[0]["date"].">
    </form>";
   }
 
   if($value == 3){
   echo "<formaction='edittable.php?id=3'>
        <label>Nombre</label>
        <input name='' value=".$data[0]["login"]."><br>
        <label>Cantidad mesas</label>
        <input name='' value=".md5($data[0]["password"])."><br>
        <label>Hora de reservation</label>
        <input name='' value=".$data[0]["identification"]."><br>
        <label>Nombre Usuario</label>
        <input name='' value=".$data[0]["name"].">
    </form>";
   }
 ?>
</body>
</html