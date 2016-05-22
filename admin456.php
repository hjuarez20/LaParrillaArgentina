<?php
require 'db/db.php';
if($_POST){

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

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/principal.css">
        <title>New User</title>
    </head>

    <body id="newUser">

        <section class="login-form">
            <div>
                <form name="userlogin" action="admin456.php" method="post">
                    <ul>

                        <h2>Crear Nuevo Usuario</h2>
                        <li>
                            <label for="nom_Usuario">Nombre
                                <label>
                        </li>
                        <input type="text" name="name" required>

                        <li>
                            <label for="correo_usu">Cédula</label>
                        </li>
                        <input type="text" name="identification" required>

                        <li>
                            <label for="clave_usu">Nombre de Usuario</label>
                        </li>
                        <input type="text" name="username" required>

                        <li>
                            <label for="clave_usu">Contraseña
                                <label>
                        </li>
                        <input type="password" name="password" required>

                        <li>
                            <label for="clave_usu">Confirmar Contraseña
                                <label>
                        </li>
                        <input type="password" name="conpassword" required>
                        <br>

                        <input type="submit" value="Agregar Usuario">

                    </ul>
                </form>
            </div>
        </section>


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