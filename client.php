<?php

 require 'db/db.php';
 $data = $database->select("tbusers", "*");
 $dataFood = $database->select("tbmenu", "*",[
                                            "ORDER" => "category"
                                            ]);
 $user = $_GET['name'];
?>
    <html>

        <head>
        <title>Clientes</title>
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
                <p class="font-style_1 welcome">Welcome
                    <?php echo $user; ?>, <a href="admin123.php">Cerrar sesión</a></p>
            </section>

            <section class="left ">
                <nav>
                    <ul class="font-style_1">
                        <li><a href="">Inicio</a></li>
                        <li><a href="reservation.php">Reservación</a></li>
                    </ul>
                </nav>
            </section>
        </div>
            
        <div class="containerCenter tableSize ">
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <article class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <th id="name">Nombre</th>
                                        <th id="id">Identificación</th>
                                        <th id="login">Login</th>
                                    </tr>
                                </table>
                            </article>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <?php
                                    $len = count($data);
                                    for($i=0; $i<$len; $i++){
                                    echo  "<tr><td>".$data[$i]["name"]."</td><td>".$data[$i]["identification"]."</td><td>".$data[$i]["login"]."</td><td>"."</td><td><a href='editar.php?id=".$data[$i]["idUser"]."'>Editar</a> <a href='delete.php?id=".$data[$i]["idUser"]."'>Eliminar</a></td></tr>";
                }
            ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</body>
</html>