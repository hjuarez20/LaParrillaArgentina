<!-- PHP CODE -->
<?php
 require 'db/db.php'; //<----- DATABASE INCLUDE

    //MENU SELECTED STATE(ACTIVE)
    $data = $database->select("tbmenu", [
                                    'nameDish',
                                    'category',
                                    'description',
                                    'price',
                                    'image'],[
                                    "state" => "active"
                                    ]);
?>
    <!-- HTML AND PHP CODE -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
        <meta name="keywords" content="css3, perspective, 3d, jquery, transform3d, responsive, template, restaurant, menu, leaflet, folded, flyer, concept" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/menuStyle.css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
        <!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
    </head>

    <body>
        <div class="menuContainer">

            <header>

                <h1>Restaurante La Parrilla Argentina Menú</h1>
                <h2>
					Un Menú variado para todos los gustos, construido por nuestros Chef's profesionales.
				</h2>

            </header>

            <section class="main">

                <div id="rm-container" class="rm-container">

                    <div class="rm-wrapper">

                        <div class="rm-cover">

                            <div class="rm-front">
                                <div class="rm-content">

                                    <div class="rm-logo"></div>
                                    <h2>La Parrilla Argentina</h2>
                                    <h3>Homemade &amp; Grill    Food</h3>

                                    <a href="#" class="rm-button-open">Ir al Menu</a>
                                    <div class="rm-info">
                                        <p1>
                                            <strong>La Parrilla Argentina Restaurant</strong>
                                            <br> Contiguo UCR Sede del Pacífico
                                            <br> Puntarenas, Costa Rica
                                            <br>
                                            <strong>Phone</strong> 626.511.1170
                                            <br>
                                            <strong>Fax</strong> 626.992.1020</p1>
                                    </div>

                                </div>
                                <!-- /rm-content -->
                            </div>
                            <!-- /rm-front -->

                            <div class="rm-back">
                                <div class="rm-content">

                                    <!-- DRINKS -->
                                    <h4>Bebidas</h4>
                                    <dl>
                                        <?php
                                          for($a=0; $a<count($data); $a++){
                                              if($data[$a]["category"] == "drinks"){
                                           echo   "<dt><a class='rm-viewdetails' 
										data-thumb =".$data[$a]["image"].">".$data[$a]["nameDish"]." $".$data[$a]["price"]."</a></dt>"."
                                         <dd>".$data[$a]["description"]."</dd>";
                                          }}
                                        ?>
                                    </dl>
                                    <!-- WINES -->

                                    <h4>Vinos</h4>
                                    <dl>
                                        <?php
                                          for($a=0; $a<count($data); $a++){
                                              if($data[$a]["category"] == "wines"){
                                           echo   "<dt><a class='rm-viewdetails' 
										data-thumb =".$data[$a]["image"].">".$data[$a]["nameDish"]." $".$data[$a]["price"]."</a></dt>"."
                                         <dd>".$data[$a]["description"]."</dd>";
                                          }}
                                        ?>
                                    </dl>
                                </div>
                                <!-- /rm-content -->
                                <div class="rm-overlay"></div>

                            </div>
                            <!-- /rm-back -->

                        </div>
                        <!-- /rm-cover -->

                        <div class="rm-middle">
                            <div class="rm-inner">
                                <div class="rm-content">
                                    <!-- MAINS -->
                                    <h4>Platos Principales</h4>
                                    <dl>
                                        <?php
                                          for($a=0; $a<count($data); $a++){
                                              if($data[$a]["category"] == "mains"){
                                           echo   "<dt><a class='rm-viewdetails' 
										data-thumb =".$data[$a]["image"].">".$data[$a]["nameDish"]." $".$data[$a]["price"]."</a></dt>"."
                                         <dd>".$data[$a]["description"]."</dd>";
                                          }}
                                        ?>
                                    </dl>
                                </div>
                                <!-- /rm-content -->
                                <div class="rm-overlay"></div>
                            </div>
                            <!-- /rm-inner -->
                        </div>
                        <!-- /rm-middle -->

                        <div class="rm-right">

                            <div class="rm-front">

                            </div>

                            <div class="rm-back">
                                <span class="rm-close">Cerrar</span>
                                <div class="rm-content">

                                    <!-- SALADS -->
                                    <h4>Ensaladas</h4>
                                    <dl>
                                        <?php
                                          for($a=0; $a<count($data); $a++){
                                              if($data[$a]["category"] == "salads"){
                                           echo   "<dt><a class='rm-viewdetails' 
										data-thumb =".$data[$a]["image"].">".$data[$a]["nameDish"]." $".$data[$a]["price"]."</a></dt>"."
                                         <dd>".$data[$a]["description"]."</dd>";
                                          }}
                                        ?>
                                    </dl>
                                    <!-- DESSERTS -->
                                    <h4>Postres</h4>
                                    <dl>
                                        <?php
                                          for($a=0; $a<count($data); $a++){
                                              if($data[$a]["category"] == "desserts"){
                                           echo   "<dt><a class='rm-viewdetails' 
										data-thumb =".$data[$a]["image"].">".$data[$a]["nameDish"]." $".$data[$a]["price"]."</a></dt>"."
                                         <dd>".$data[$a]["description"]."</dd>";
                                          }}
                                        ?>
                                            <!-- CONTACT -->
                                            <div class="rm-order">
                                                <p><strong>Deseas que nos encarguemos de tu fiesta o evento?</strong> Contactanos y te ayudaremos a organizar tu evento: <strong>626.511.1170</strong></p>
                                            </div>
                                </div>
                                <!-- /rm-content -->
                            </div>
                            <!-- /rm-back -->

                        </div>
                        <!-- /rm-right -->
                    </div>
                    <!-- /rm-wrapper -->

                </div>
                <!-- /rm-container -->

            </section>

        </div>
        <!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript">
            $(function () {

                Menu.init();

            });
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