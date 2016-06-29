<?php
/**/
if($database==null){
    require 'db/db.php';
}

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
    
    
   $database->insert("tbreservations", [
            "reservationHour"=> $_POST["time"],
            "peopleAmount" => $_POST["tableAmount"],
            "clientName" => $_POST["name"],
            "clientPhone" => $_POST["phone"],
            "clientEmail" => $_POST["email"],
            "state" => 1,
            "date" => $fecha
        ]); 
    header("Location: index.php#reservaciones");
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Calendario</title>
    </head>

    <body>
        <!--reseration code-->
        <div class="container">
            <article class="row">
                <article class="containerReserve col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="labels">Reservaciones</p>
                    <p>
                        En La Parrilla Argentina puede realizar sus reservaciones para esa fecha especial.
                    </p>
                    <p>
                        Le ofrecemos el mejor servicio.
                    </p>
                </article>
        </div>
        <!-- ***************************form to add the information of reservation************************ -->
        <form method="post" action="reservation.php" enctype="multipart/form-data">

            <div class="container">
                <article class="row">
                    <article class="reserve-left col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="labels">Nombre</p>
                        <input class="input" type="text" size="15" maxlength="30" placeholder="Nombre" name="name">
                        <br></br>

                        <!-- *************************************position for the DATE************************ -->


                        <label class="labels"> Ingresar Fecha</label>
                        <br/>
                        <input id="datePicker" name="date" onchange="mDate(date.value);" class="input" type="date" />

                        <!-- *************************************END position for the DATE************************ -->

                        <br></br>
                        <p class="labels">Correo</p>
                        <input class="input" type="text" size="15" maxlength="30" placeholder="ejemplo@gmail.com" name="email">
                    </article>
                    <article class="reserve-right col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <!-- FORM for calendar  -->

                        <!-- *************************************position for the HOUR************************ -->

                        <p class="labels">Hora</p>
                        <!-- <form  name=myform> -->
                        <select name=time id="hour-list" onchange="mTables();">
                            <option name=default value='default'> Seleccione la hora </option>
                            <?php
                            for($i=0; $i<count($time); $i++){
                             echo   "<option name=".$time[$i]["nameTime"].">".$time[$i]["time"]."</option>";
                            }    
                        ?>
                        </select>
                        <br></br>
                        <!--</form>-->

                        <!-- *************************************END position for the HOUR************************ -->

                        <!-- FORM for calendar -->
                        <p class="labels">Mesa (4 personas c/u)</p>
                        <!-- <form method="post" name=myform>  -->
                        <select id="tables" name=tableAmount>
                            <option name=cero value=0 disabled>Cantidad de Mesas</option>
                            <option name=uno value=1> 1 mesa </option>
                            <option name=dos value=2> 2 mesas </option>
                            <option name=tres value=3> 3 mesas </option>
                            <option name=cuatro value=4> 4 mesas </option>
                        </select>
                        <!-- </form> -->
                        <br></br>
                        <p class="labels">Telefono</p>
                        <input class="input" type="text" size="15" maxlength="30" placeholder="Teléfono" name="phone">
                    </article>
                </article>
            </div>
            <div class="container">
                <article class="row">
                    <article class="col-xs-12 col-sm-12  col-md-4 col-md-offset-5 col-sm-offset-2">
                        <button  type="submit" name="reserv" class="hvr-float-shadow buttons" data-toggle="modal" data-target="#myModal">RESERVAR</button>
                    </article>
                </article>
            </div>

        </form>
        <!-- *********************end form reservation  ********************************** -->

          
          <!--Notification pop-up for reservation-->
          <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reservación exitosa</h4>
      </div>
      <div class="modal-body">
        <p>Reservación ha sido realizada</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>    
          
          
          
           <script>
            function clearItems() {
                $("#hour-list").find('option').remove();
                $("#tables").find('option').remove(); //selimpia la lista
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

            function mTables() {
                var selectedHour = $('#hour-list').val();
                var selectedDate = $('#datePicker').val();

                console.log(selectedHour, selectedDate);

                $.ajax({
                        method: "POST",
                        url: "tbReserv.php",
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
        </script>

    </body>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-77610408-2', 'auto');
        ga('send', 'pageview');
    </script>

    </html>