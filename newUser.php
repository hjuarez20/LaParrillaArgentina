<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
	<title>New User</title>
</head>
<body id="newUser">
    
	<section class="login-form">
    <div>    
	<form name= "userlogin" action="../controller/conNewUser.php" method="post">
        <ul>
            <h2>New User</h2><br><br>
		 <li><label for="nom_Usuario">Name<label></li>
             <input type="text" name="name" required><br><br>
       
        <li><label for="correo_usu">Identification</label></li>
            <input type="text" name="identification" required><br><br> 

		<li><label for="clave_usu">UserName</label></li>
            <input type="text" name="username" required><br><br> 

		<li><label for="clave_usu">Password<label></li>
            <input type="password" name="password" required><br><br> 
		
        <li><label for="clave_usu">Confirm Password<label></li>
            <input type="password" name="conpassword" required><br> 
        <br>

		<input type="submit" value="Add User">
		
        </ul>

	</form>
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
