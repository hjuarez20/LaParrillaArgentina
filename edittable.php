<?php
require "db/db.php";

/*---------------------------------------time for reservation from database--------------------------*/
$time = $database->select("tbtime",[
                        "nameTime",
                        "time",
                        "state"
                        ],[
                        "state" => "int"
                        ]);


if($_POST){
    
 /*--------------------------------date format change for mysql date format----------------------*/
    $fecha=date("Y-m-d",strtotime($_POST["date"] ));
    
    
 /* updates the selected data on the reservation  */
    if($_POST["value"] == 1){
        $database->update("tbreservations",
                          ["date" => $fecha,
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
        
        <select class='inputStyle' id='tables' name='peopleAmount'>
                            <option name=cero value=0 disabled>Cantidad de Mesas</option>
                            <option name=uno value=1> 1 mesa </option>
                            <option name=dos value=2> 2 mesas </option>
                            <option name=tres value=3> 3 mesas </option>
                            <option name=cuatro value=4> 4 mesas </option>
                        </select><br>
        
        <select class='inputStyle' name='reservationHour' id='hour-list' onchange='mTables();'>";
                               
                            for($i=0; $i<count($time); $i++){
                             echo   '<option name='.$time[$i]['nameTime'].'>'.$time[$i]['time'].'</option>';
                            }    
                           
                echo "   </select><br>
                 
                 
        
        <input class='inputStyle' id='datePicker' name='date' onchange='mDate(date.value);' type='date' />

        
        
        
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
        <div class='labelStyle'>
        <label>Nombre</label>
        <br></br>
        <label>Identificacion</label>
        <br></br>
        <label>Contraseña</label>
        <br></br>
        <label>Login</label>
        </div>
        
        <div>
        <input class='inputStyle' readonly='readonly' name='' value=".$data[0]["name"]."><br>
        <input class='inputStyle' readonly='readonly' name='' value=".$data[0]["identification"]."><br>
        <input class='inputStyle' name='password' value=".$password."><br>
        <input class='inputStyle' name='login' value=".$data[0]["login"].">
        <input class='inputStyle' type='hidden' name='id' value=".$data[0]["idUser"].">
        <input class='inputStyle' type='hidden' name='num' value=3>
        </div>
        <br></br>
        <input id='buttom' type='submit' value='EDITAR'>
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
    
    <script>
     function mTables() {
                var selectedHour = $('#hour-list').val();
                var selectedDate = $('#datePicker').val();

                console.log(selectedHour, selectedDate);

                $.ajax({
                        method: "POST",
                        url: "tableReserv.php",
                        data: {
                            H: selectedHour,
                            D: selectedDate
                        },
                        dataType: "text"
                    })
                    .done(function (items) {
                        items = JSON.parse(items);
                        $("#tables").show();
                        var len = items.length;
                        console.log(len); // alert(len);
                        for (var i = 0; i < len; i++) {
                            $("#tables").append("<option value='" + items[i].name + "'>" + items[i].name + "</option>");
                        }
                    });
            }
        function mDate(selectedDate) {
                clearItems();

                $.ajax({
                        method: "POST",
                        url: "hourReserv.php",
                        data: {
                            param: selectedDate
                        },
                        dataType: "text"
                    })
                    .done(function (items) {
                        items = JSON.parse(items);
                        $("#hour-list").show();
                        var len = items.length;

                        for (var i = 0; i < len; i++) {
                            $("#hour-list").append("<option value='" + items[i].name + "'>" + items[i].name + "</option>");
                        }
                    });
            }

    </script>
</body>
</html>