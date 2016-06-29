<?php
session_start();
 require 'db/db.php';
 $data = $database->select("tbreservations", "*");
 
 




/*  Administracion de Platillos */
/*METODO PARA INGRESAR PLATILLOS*/
if($_POST){
    
    echo($_POST['image']); 
    
    if($_POST['insert']=="agregar"){ /*BOTON AGREGAR PRESIONADO*/
      if(isset($_POST['nameDish']) && ($_POST['nameDish'])!=null && 
         isset($_POST['category']) && ($_POST['category'])!=null && 
         isset($_POST['description']) && ($_POST['description'])!=null && 
         isset($_POST['price']) && ($_POST['price'])!=null && 
         isset($_POST['state']) && ($_POST['state'])!=null && 
         isset($_POST['image']) && ($_POST['image'])!=null
        ){/*TODO ESTE IF ANTERIOR ES POR SEGURIDAD*/
     
    $database->insert("tbmenu", [
        "idUserMod" => $_SESSION['idUser'],
        "nameDish" => $_POST["nameDish"],
        "category" => $_POST["category"],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "state" => $_POST["state"],
        "dayMod" => date("Y/m/d"),
        "image" => $_POST["image"]
    ]);
          
        echo '<script>alert("Se ha insertado un elemento.!");</script>';
          $_POST['insert']=null; /*INTENTE CON ESTO LIMPIAR EL POST PARA EN CASO DE QUE SE PRESIONARA OTRO BOTON O SE REFEFRESCARA LA PAGINA NO TUVIERA EL DATO AUN, PERO NO FUNCIONO*/
         
      }else{
            if(!$_POST['insert']=null) {
                echo '<script>alert("Debe llenar todos los campos con la informacion requerida.!");</script>';
                  $_POST['insert']=null;/*INTENTE CON ESTO LIMPIAR EL POST PARA EN CASO DE QUE SE PRESIONARA OTRO BOTON O SE REFEFRESCARA LA PAGINA NO TUVIERA EL DATO AUN, PERO NO FUNCIONO*/
            } 
            
      }//FIN DEL ISSET
    }
}



?>
    <html>

    <head>
        <title>Administar</title>
        
        
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--Importar hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/principal.css" rel="stylesheet" type="text/css">
        
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
        
    </head>

    <body>

        <div class=" StickyMenu container menuSize">
            <section class="rigth">
                <p class="font-style_1 welcome">Bienvenido,
                  <?php echo $_SESSION['user'] ?>, <a href="admin123.php">Cerrar sesión</a></p>
            </section>

            <section class="left ">
                <nav>
                    <ul class="font-style_1">
                        <li><a class="page-scroll" href="#contReservation">Reservación</a></li>
                        <li><a class="page-scroll" href="#contMenu">Platillos</a></li>
                        <li><a class="page-scroll" href="#contClient">Empleados</a></li>
                        <li><a class="page-scroll"href="#contContact">Contactenos</a></li>
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



        <div class="containerCenter tableSize " id="contContact">
           <?php
            include('tbContact.php');
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
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
              <script src="js/backend.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js" ></script>
        <script src="js/jquery.easing.min.js"></script>
        </body>

    </html>