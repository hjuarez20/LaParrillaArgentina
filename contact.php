<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$to = "nelguaro@gmail.com";

if($_POST){
    require 'db/db.php';
    
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $subject = $_POST['LaParrillaArgentina email'];
    $messaje = nl2br($_POST['contact-comment']);
    
    if($name == "" || $email == "" || $messaje == ""):
    echo '<div class="alert alert-danger"> Todos los campos son requeridos para enviar el mensaje</div>';
    else:
        $mail->From = $email;
        $mail->addAddress($to);
        $mail->Subject= $subject;
        $mail->isHtml(true);
        $mail->Body = '<strong>'.$name.'</strong> ha enviado un mensaje desde la pagina LaParrillaArgentina.esy.es, el cual dice lo siguiente: <br><p>'.$messaje.'</p>';
        $mail-> CharSetv = 'UTF-8';
        $mail->send();
    
        $database->insert("tbcontact",[
        "name" => $_POST["contact-name"],
        "email" => $_POST["contact-email"]
                            ]);
        header("location:/");

    endif;
    }

    


    


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <div class="container">
        <div class="row">
                <div class="contact-user  col-xs-12 col-sm-12 col-md-6">

                    <h2>Contactenos</h2>
                    <div class="contact-input">
                       <form action="contact.php" method="post">
                            <label for="">Nombre (*) </label>
                            <br>
                            <input type="text" size="30" name="contact-name" value=""  aria-required="true" aria-invalid="false">
                             <br>
                            <br>
                            <label for="">Email(*)</label>
                            <!--      h-->
                            <br>
                            <input type="email" size="30" name="contact-email" value=""  aria-required="true" aria-invalid="false" placeholder="alguien@ejemplo.com"> 
                            <br>
                            <label for="">Mensaje </label>
                            <br>
                            <textarea name="contact-comment" id="" cols="30" rows="10" placeholder="Su opinión es muy importante para nosotros."></textarea>  
                            <br>
                        </form>
                    </div>
                </div> 
                <!--end contact-user-->

                <div class="contact-location hidden-sm hidden-xs col-md-6">

                    <h2>Ubicación</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.4267449202734!2d-84.8128653857907!3d9.981563676091564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa02e597100a0f1%3A0x617ab3a3e72c0d8f!2sUniversidad+de+Costa+Rica%2C+Sede+Pac%C3%ADfico!5e0!3m2!1ses-419!2scr!4v1460010428719" width="500" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
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