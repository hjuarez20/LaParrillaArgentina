<?php
require "db/db.php";

if($_POST){
 /* updates the selected data on the reservation  */
    if($_POST["value"] == 1){
        $database->update("tbreservations",
                          ["date" => $_POST["date"],
                           "peopleAmount" => $_POST["peopleAmount"],
                           "reservationHour" => $_POST["reservationHour"]],
                         ["idReservation" => $_POST["id"]]);
        header ("Location: principal.php#contReservation");
   }
 /* updates the selected data on the users  */
   if($_POST["num"] == 3){
        $password = md5($_POST["password"]);
        $database->update("tbusers",
                          ["login" => $_POST["login"],
                           "password" => $password],
                         ["idUser" => $_POST["id"]]);
        header ("Location: principal.php#contClient");
   }
    
}

/*url variables are obtained to compare what type it is and upload the data to show the user, 
depending on the reservations table and users.*/
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
   if($value == 1){
   echo "<form action='edittable.php' method='post'>
        <div class='labelStyle'>
        <label>Nombre</label>
         <br></br>
        <label>Cantidad mesas</label>
         <br></br>
        <label>Hora de reservacion</label>
         <br></br>
        <label>Fecha</label>
        </div>
        <div>
        <input class='inputStyle' readonly=”readonly” name='' value=".$data[0]["clientName"]."><br>
        <input class='inputStyle' name='peopleAmount' value=".$data[0]["peopleAmount"]."><br>
        <input class='inputStyle' name='reservationHour' value=".$data[0]["reservationHour"]."><br>
        <input class='inputStyle' name='date' value=".$data[0]["date"].">
        <input class='inputStyle' type='hidden' name='id' value=".$data[0]["idReservation"].">
        <input class='inputStyle' type='hidden' name='value' value=1>
        </div>
        <br></br>
        <input id='buttom' type='submit' value='EDITAR'>
        <input id='buttom' type='button' value='CANCELAR' onclick='history.back();'>
    </form>";
   }
 
   if($value == 3){
    $m = $data[0]['password'];
    echo $m;
    echo md5($m);
       $password= md5($data[0]['password']);
   echo "<form  action='edittable.php' method='post'>
        <label>Nombre</label>
        <input readonly='readonly' name='' value=".$data[0]["name"]."><br>
        <label>Identificacion</label>
        <input readonly='readonly' name='' value=".$data[0]["identification"]."><br>
        <label>Contraseña</label>
        <input name='password' value=".$password."><br>
        <label>Login</label>
        <input name='login' value=".$data[0]["login"].">
        <input type='hidden' name='id' value=".$data[0]["idUser"].">
        <input type='hidden' name='num' value=3>
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
</html