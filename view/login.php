<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La Parrilla Argentina</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.css">
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>
	
</head>
<body id="login">
    
    <section>
    <div id="container">
         
         <div id="containerImagen">
         <img src="../img/user.png">
         </div>
        
         <div id="containerLogin">
         <form name="useLogin" action="../controller/conUser.php" method="post">
         <label> Name</label><br>
         <input type="name" name="user" placeholder=" Input your username" required></input><br><br>
         <label> Password</label><br>
         <input type="password" name="password" placeholder=" Input your password" required> </input><br>
         <input class="button" type="submit" value="Ingresar">
         </form>
         </div>
    </div>
    </section>    
        
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