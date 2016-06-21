<?php
require 'PHPMailer/PHPMailerAutoload.php';

if($database==null){
      require 'db/db.php';

}


$mail = new PHPMailer;
$to = "nelguaro@gmail.com";
      
    

if($_POST){

    
     $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $subj_user=$_POST['contact-subject'];
    $subj ="LaParrillaArgentina email: " . $subj_user;
    $messaje = nl2br($_POST['contact-comment']);
    
    $data=$database->insert('tbContact',[
                            'name' => $_POST['contact_name'],
                            'email' => $_POST['contact_email']]);
    
    
 
        $mail->From = $email;
        $mail->addAddress($to);
        $mail->Subject= $subj;
        $mail->isHtml(true);
        $mail->Body = '<strong>'.$name.'</strong> ha enviado un mensaje desde la pagina LaParrillaArgentina.esy.es, el cual dice lo siguiente: <br><p>'.$messaje.'</p>. </br></br> Puedes contactarl@ mediante el siguiente correo electronico: </br>'.$email;
        $mail-> CharSetv = 'UTF-8';
        $mail->send();
    
        $database->insert("tbcontact",[
        "name" => $_POST["contact-name"],
        "email" => $_POST["contact-email"]
                            ]);
    
    
    
        header("Location: index.php#contacto");

    
    
}


    
    




?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="contact-user  col-xs-12 col-sm-12 col-md-6">

                    <h2>Contactenos</h2>
                    <div class="contact-input">
                        <form method="POST" name="contact-form" id="contact-form" action="contact.php"  >
					<div class="row">
						<div class="col-md-6">
							<label>Nombre:</label>
							<input type="text" name="contact-name" class="form-control" required>
                        </div>

						<div class="col-md-6">
							<label>Email:</label>
							<input type="email" name="contact-email" class="form-control" placeholder="ejemplo@correo.com" required>
						</div>
                        
                        <div class="col-md-12">
							<label>Asunto:</label>
							<input type="text" name="contact-subject" class="form-control" required>
						</div>
					</div>
					
					<label>Mensaje:</label>
					<textarea name="contact-comment"  cols="30" rows="10" class="form-control" placeholder="Su opinión es muy importante para nosotros." minlength="20" required></textarea>
					<button type="submit" class="buttons" data-toggle="modal" data-target="#test">Enviar</button>            


     
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
<!--
<div class="modal fade" id="test" role="dialog">
            <div class="modal-dialog">

                 Modal content
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
-->

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