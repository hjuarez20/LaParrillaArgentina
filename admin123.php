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
        <link rel="stylesheet" href="css/animate.css">

    </head>

    <body class="background-login">

    <div class="header animated fadeInDown">
        <h2>La Parrilla Argentina</h1>
        <h4>Administración de la página</h2>
    </div>
       

                <div class="animated fadeInUp" >
                    <form  name="useLogin" action="" method="post">
                        
                        <div class="group">
                        <input type="name" name="user"  required></input>
                        <span class="bar"></span>
                        <label>Usuario</label>
                        </div>
                       
                        <div class="group">
                        <input type="password" name="password"  required> </input>
                        <span class="bar"></span>
                        <label>Contraseña</label>
                        </div>
                        
                        <button type="input" class="button buttonBlue" value="Ingresar">Ingresar<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div></button>
                    </form>
                    
        
        <div class="otherButton" >
                 <input class="home" type="button" value="Inicio" onClick=" window.location.href='index.php' ">

                <input class="user" type="button" value="Nuevo usuario" onClick=" window.location.href='admin456.php' ">    
               </div>
               
                      
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