<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>admin </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/backend.js"></script>
		<script src="js/jquery.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>

	</head>
	<body>

		<div class="containerCenter menuSize">
			<section class="rigth">
				<!-- <p class="font-style_1 welcome"> Welcome <?php echo $_SESSION['User'] ?>, <a href="../controller/conLogout.php">Cerrar sesi&oacute;n</a></p> -->
				<p class="font-style_1 welcome">Welcome Andrea, Cerrar sesión</p>
			</section>

			<section class="left ">
				<nav>
		          <ul class="font-style_1">
		            <li><a href="">Inicio</a></li>
		            <li><a href="">Reservación</a></li>
		            <li><a href="">Clientes</a></li>
		          </ul>
        		</nav>
			</section>
		</div>

		<div class="containerCenter tableSize ">
			<section>			 	 
  				<div class="row">
    				<div class="col-xs-12">
   		  				 <div class="table-responsive">
	   		  				 <article class="tbl-header">
							    <table cellpadding="0" cellspacing="0" border="0">
							        <tr>						      
							          <th>Nombre</th>
							          <th>Teléfono</th>
							          <th>Email</th>
							          <th>Fecha</th>
							          <th>Cantidad de Personas</th>
							        </tr>
							    </table>
							  </article>
							  <div class="tbl-content">
							      <table cellpadding="0" cellspacing="0" border="0">
							        <tr>
							          <td>Andrea Palma</td>
							          <td>83119169</td>
							          <td>andrea@gmail.com</td>
							          <td>24/07/16</td>
							          <td>1</td>
							        </tr>
							    </table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>


		<div></div>
		
		
	</body>
</html>