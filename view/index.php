<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La Parrilla Argentina</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/calendario_dw-estilos.css">
	
</head>
<body>
		<section id="home" class="img1 parallax medium">
			<?php include ('components/menu.php');?>
		</section>
<section  id="nosotros"class="img2 parallax">
	<?php include ('aboutus.php');?>
</section>

<section  id="menu"class="img3 parallax medium">
	<article>

	</article>
</section>	

<section  id="reservaciones" class="img2 parallax medium ">
	<article>
		<?php include ('reservation.php');?>
	</article>
</section>	

<section  id="contacto" class="contact parallax medium img4 ">
     <?php include ('contact.php');?>
</section>
	<script src="../js/jquery-latest.js"></script>
	<script src="../js/main.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../js/calendario.js"></script> 
    
    <script type="text/javascript">
   $(document).ready(function(){
      $(".campofecha").calendarioDW();
   })
   </script>  
</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-77610408-2', 'auto');
  ga('send', 'pageview');
 
</script>
</html>