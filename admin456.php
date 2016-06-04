<?php
require 'db/db.php';
if($_POST){
    $data = $database->select('tbusers',['login'],['login'=>$_POST["username"]]);
    
    if(count($data) == 0){
            if($_POST['password'] == $_POST['conpassword']){
                $database->insert("tbusers",
                   [
                     "login" => $_POST['username'],
                     "password" => md5($_POST['password']),
                     "identification" => $_POST['identification'],
                     "name" => $_POST['name']
                   ]);
    
  header('Location: admin123.php');
}else{
     echo'password no coincide';
 }
        }
        else{
            echo'Usuario ya existente';


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
    </head>>

    <body class="background-newUser">
        <div class="row">
            <section class="col-xs-12 col-md-4"></section>

           

            <section class="col-xs-12 col-md-4">
                <div class="newUser animated fadeInLeft">
                <div class="newUser__form">
                    <form name="userlogin" action="admin456.php" method="post">
                        <div class="login__row group">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" name="name" class="login__input name animated fadeInRight" name="user"  required/>
                            <label for="nom_Usuario">Nombre</label>
                        </div>

                        <div class="login__row group">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" name="identification" class="login__input name animated fadeInRight" name="user"  required/>
                            <label for="correo_usu">Cédula</label>
                        </div>

                         <div class="login__row group">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" name="username" class="login__input name animated fadeInRight" name="user"  required/>
                            <label for="clave_usu">Nombre de Usuario</label>
                        </div>

                        <div class="login__row group">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" name="password" class="login__input name animated fadeInRight" name="user"  required/>
                            <label for="clave_usu">Contraseña</label>
                        </div>

                        <div class="login__row group">
                           <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" name="conpassword" class="login__input name animated fadeInRight" name="user"  required/>
                            <label for="clave_usu">Confirmar Contraseña</label>
                        </div>

                        <div>
                            <button type="submit" class="login__submit animated shake" value="Agregar Usuario">Agregar Usuario</button>

                             <p class="login__signup">Volver al &nbsp;<a href="admin123.php" class="signup">Login</a> 

                              <p class="login__signup">Volver al &nbsp;<a href="index.php" class="signup">Inicio</a> 


                        </div>

                    </form>
                </div>
            </div>
            </section>

             <section class="col-xs-12 col-md-4"></section>
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