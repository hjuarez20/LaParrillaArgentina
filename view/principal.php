<?php

    include("../model/seguridad.php"); 
    //include("../db/query.php");
?>
<html>
<head>
    <title>Administar</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<!--Importar hojas de estilo -->	
		<link href="../css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/animate.css">
</head>
<body>
    
<section>    
    <?php include("../view/components/menu.php"); ?> 
</section>

<section class="section-login">
    <ul>
     <li>Welcome</li>
     <li><?php echo $_SESSION['User'] ?></li>
     <li><a href="../controller/conLogout.php">Cerrar sesi&oacute;n</a></li>
    </ul>     
</section>
    
<section class="section-menu parallax medium">
     
    
</section>

<section class="section-reservation"></section>
    <?php
   /* $query = new Consultdb();
    $data = $query->listReservation();*/
     ?>
         <table border="1">
           <tr><td>Name</td><td>Phone</td><td>Email</td><td>Date</td><td>Count</td><td>Options</td></tr>
         
            <?php
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo  "<tr><td>".$data[$i]["clienteName"]."</td><td>".$data[$i]["clientPhone"]."</td><td>".$data[$i]["clientEmail"]."</td><td>".$data[$i]["date"]."</td><td>".$data[$i]["peopleAmount"]."</td><td><a href='editar.php?id=".$data[$i]["id_personal"]."'>Editar</a> <a href='delete.php?id=".$data[$i]["id_personal"]."'>Eliminar</a></td></tr>";
                }
            ?>
        </table>
<section></section>
      
<body>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-77610408-2', 'auto');
  ga('send', 'pageview');
 
</script>
</html>