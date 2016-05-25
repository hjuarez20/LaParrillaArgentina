<?php

 require 'db/db.php';
 $data = $database->select("tbreservations", "*");
 $dataFood = $database->select("tbmenu", "*",[
                                            "ORDER" => "category"
                                            ]);
 $user = $_GET['name'];




/*  Administracion de Platillos */
if($_POST){
    
    $database->insert("tbmenu", [
        "userMod" => "Oscar", /*$user*/
        "nameDish" => $_POST["nameDish"],
        "category" => $_POST["category"],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "state" => $_POST["state"],
        "dayMod" => date("Y/m/d"),
        "image" => $_POST["image"],
    ]);
}



?>
    <html>

    <head>
        <title>Administar</title>
        
        
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--Importar hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/principal.css" rel="stylesheet" type="text/css">
        <script src="js/backend.js"></script>
        <script src="js/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
        
    </head>

    <body>

        <div class="container menuSize">
            <section class="rigth">
                <p class="font-style_1 welcome">Bienvenido,
                  <?php echo $user?>, <a href="admin123.php">Cerrar sesión</a></p>
            </section>

            <section class="left ">
                <nav>
                    <ul class="font-style_1">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#contReservation">Reservación</a></li>
                        <li><a href="#contClient">Clientes</a></li>
                        <li><a href="#contMenu">Menu</a></li>
                    </ul>
                </nav>
            </section>
        </div>


         <div class="containerCenter tableSize " id="contReservation">
           <?php
            include ("tbReservation.php");
            ?>
        </div>

        <div class="containerCenter tableSize " id="contMenu">
            <?php
            include ("tbMenu.php");
            ?>
        </div>
        
        <div class="containerCenter tableSize " id="contClient">
            <?php
            include ("tbClient.php");
            ?>
        </div>



        <section></section>

        <body>
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
        </body>

    </html>