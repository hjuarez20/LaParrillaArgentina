<?php
 require 'db/db.php';
if($_POST){
 $data = $database->select("tbusers",[
                            'idUser',
                            'name'
                            ],["AND" => [
                                "password" => md5($_POST['password']),
                                "login" => $_POST['user']
                                ]
                            ]);
 
 if(count($data) == 1){
     session_start();
     $_SESSION['user']=$data[0]["name"];
     $_SESSION['idUser']=$data[0]["idUser"];
     header('Location: principal.php');
     
 }else{
     echo'fallo';
 }
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>La Parrilla Argentina</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>

    <body class="background-login">
     
        <div class="row">   
        <section class="col-xs-12 col-md-4"></section>

        <section class="col-xs-12 col-md-4"></section>

        <section class="col-xs-12 col-md-4 col-lg-4">
        <div class="login animated fadeInLeft">
            <div class="login__check animated zoomIn"></div>
                <div class="login__form">
                    <form  name="useLogin" action="" method="post">

                        <div class="login__row group">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="name" class="login__input name animated fadeInRight" name="user"  required/>
                            <label>Usuario</label>
                        </div>

                        <div class="login__row group">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" class="login__input pass animated fadeInRight" name="password"  required/>
                            <label>Contraseña</label>
                        </div>
                        <div>
                            <button type="input" class="login__submit animated shake" value="Ingresar">Ingresar</button>

                            <p class="login__signup">Volver al &nbsp;<a href="index.php" class="signup">Inicio</a> 
                            <p class="login__signup">Crear  &nbsp;<a href="admin456.php" class="signup">Nuevo Usuario</a> 
                        </div>
                    </form>
                </div>
        
        </div>
        </section>
        </div>
               
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/login.js"></script>
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