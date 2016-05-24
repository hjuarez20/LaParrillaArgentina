<?php
//require 'db/db.php';

/*-----------------------------------method for aviable time to reserv------------------------ */
$time ="";

function mSerchSpaceToReserv(){
    
    print_r("hace el llamado al metodo para buscar disponibilidad");
    
    $database->select("tbtime",[
                        "nameTime",
                        "time",
                        "state"
                        ],[
                        "state" => "int"
                        ]); 
}

/*--------------------------------------------END method--------------------------------------*/


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
    $fecha=date("Y-m-d",strtotime($_POST["dateReservation"]));
    
    /* format that accept mysql Y-m-d*/
    
   $database->insert("tbreservations", [
            "reservationHour"=> $_POST["time"],
            "peopleAmount" => $_POST["peopleAmount"],
            "clientName" => $_POST["name"],
            "clientPhone" => $_POST["phone"],
            "clientEmail" => $_POST["email"],
            "state" => 1,
            "date" => $fecha
        ]);    
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Calendario</title>
    </head>

    <body>
        <!-- CODIGO DE RESERVACIONES -->
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
        <!-- *********************************************************form to add the information of reservation************************ -->
        <form method="post" action="" enctype="multipart/form-data">

            <div class="container">
                <article class="row">
                    <article class="reserve-left col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="labels">Nombre</p>
                        <input class="input" type="text" size="15" maxlength="30" placeholder="nombre" name="name">
                        <br></br>
                        
                         <!-- *************************************position for the DATE************************ -->
                         
                          <p class="labels">Fecha de Reservacion</p>
                        <input onChange="" id="calendar" type="text" placeholder="fecha de reservacion" name="dateReservation" class="campofecha" size="12">
                        <!-- <br></br>  -->
                        
                        
                       
                        
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
                         <select name=time>
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
                        <p class="labels">Personas</p>
                        <!-- <form method="post" name=myform>  -->
                        <select name=peopleAmount>
                            <option name=uno value=1 disabled>Cantidad de Personas</option>
                            <option name=dos value=2> 2 person </option>
                            <option name=cuatro value=4> 4 person </option>
                            <option name=ocho value=8> 8 person </option>
                        </select>
                        <!-- </form> -->
                        <br></br>
                        <p class="labels">Telefono</p>
                        <input class="input" type="text" size="15" maxlength="30" placeholder="teléfono" name="phone">
                    </article>
                </article>
            </div>
            <div class="container">
                <article class="row">
                    <article class="reserve-button col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
                        <button id="button-Reserv" type="submit" name="reserv" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Reservar</button>
                    </article>
                </article>
            </div>

        </form>
        <!-- *************************************end form reservation  ************************************************************* -->

       
        <!-- *************************************show the dialog after making the reservation **********************************-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Comprobante de Rerservacion</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- CODIGO DE RESERVACIONES -->

        <!-- SCRIPT DE RESERVACIONES -->
        <!--<script type="text/javascript">
   $(document).ready(function(){
      $(".campofecha").calendarioDW();
   })
   </script> -->
        <!-- SCRIPT DE RESERVACIONES -->
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