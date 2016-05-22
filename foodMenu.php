<!-- PHP CODE -->
<?php
 require 'db/db.php'; //<----- DATABASE INCLUDE

    //DRINKS SELECTED TO CATEGORY AND STATE(ACTIVE)
    $dataDrinks = $database->select("tbmenu", [
                                    'nameDish',
                                    'category',
                                    'description',
                                    'price',
                                    'image'],["AND" => [
                                              "category" => "drinks",
                                                "state" => "active"
                                                        ]
                                    ]);
    //WINES SELECTED TO CATEGORY AND STATE(ACTIVE)
     $dataWines = $database->select("tbmenu", [
                                    'nameDish',
                                    'category',
                                    'description',
                                    'price',
                                    'image'],["AND" => [
                                              "category" => "wines",
                                                "state" => "active"
                                                        ]
                                    ]);
    //MAINS SELECTED TO CATEGORY AND STATE(ACTIVE)
      $dataMains = $database->select("tbmenu", [
                                    'nameDish',
                                    'category',
                                    'description',
                                    'price',
                                    'image'],["AND" => [
                                              "category" => "mains",
                                                "state" => "active"
                                                        ]
                                    ]);
    //SALADS SELECTED TO CATEGORY AND STATE(ACTIVE)
      $dataSalads = $database->select("tbmenu", [
                                    'nameDish',
                                    'category',
                                    'description',
                                    'price',
                                    'image'],["AND" => [
                                              "category" => "salads",
                                                "state" => "active"
                                                        ]
                                    ]);
    //DESSERTS SELECTED TO CATEGORY AND STATE(ACTIVE)
      $dataDesserts = $database->select("tbmenu", [
                                    'nameDish',
                                    'category',
                                    'description',
                                    'price',
                                    'image'],["AND" => [
                                              "category" => "desserts",
                                                "state" => "active"
                                                        ]
                                    ]);
   

?>


<!-- HTML AND PHP CODE -->

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
        <meta name="keywords" content="css3, perspective, 3d, jquery, transform3d, responsive, template, restaurant, menu, leaflet, folded, flyer, concept" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/menuStyle.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="menuContainer">
			
			<header>
			
				<h1>Restaurante La Parrilla Argentina Menú</h1>
				<h2>
					Una Menú variado para todos los gustos, construido por nuestros Chef's profesionales.
				</h2>
				
			</header>
			
			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">

						<div class="rm-cover">

							<div class="rm-front">
								<div class="rm-content">

									<div class="rm-logo"></div>
									<h2>La Parrilla Argentina</h2>
									<h3>Homemade &amp; Grill    Food</h3>

									<a href="#" class="rm-button-open">Ir al Menu</a>
									<div class="rm-info">
										<p1>
										<strong>La Parrilla Argentina Restaurant</strong><br>
										Contiguo UCR Sede del Pacífico<br>
										Puntarenas, Costa Rica<br>
										<strong>Phone</strong> 626.511.1170<br>
										<strong>Fax</strong> 626.992.1020</p1>
									</div>

								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content">
								
    <!-- DRINKS -->
									<h4>Bebidas</h4>
									<dl>
									    
										<dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDrinks[0]["image"]; ?> >  
										<?php echo $dataDrinks[0]["nameDish"]." $". $dataDrinks[0]["price"]; ?> </a></dt>
										<dd><?php echo $dataDrinks[0]["description"]; ?></dd>

                                         <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDrinks[1]["image"]; ?> >  
										<?php echo $dataDrinks[1]["nameDish"]." $". $dataDrinks[1]["price"]; ?> </a></dt>
										<dd><?php echo $dataDrinks[1]["description"]; ?></dd>
                                        
                                        <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDrinks[2]["image"]; ?> >  
										<?php echo $dataDrinks[2]["nameDish"]." $". $dataDrinks[2]["price"]; ?> </a></dt>
										<dd><?php echo $dataDrinks[2]["description"]; ?></dd>
                                        
                                        <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDrinks[3]["image"]; ?> >  
										<?php echo $dataDrinks[3]["nameDish"]." $". $dataDrinks[3]["price"]; ?> </a></dt>
										<dd><?php echo $dataDrinks[3]["description"]; ?></dd>
                                        
                                        <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDrinks[4]["image"]; ?> >  
										<?php echo $dataDrinks[4]["nameDish"]." $". $dataDrinks[4]["price"]; ?> </a></dt>
										<dd><?php echo $dataDrinks[4]["description"]; ?></dd>
                                         
									</dl>
    <!-- WINES -->        

									<h4>Vinos</h4>
									<dl>
										<dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataWines[0]["image"]; ?> >  
										<?php echo $dataWines[0]["nameDish"]." $". $dataWines[0]["price"]; ?> </a></dt>
										<dd><?php echo $dataWines[0]["description"]; ?></dd>
										
										<dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataWines[1]["image"]; ?> >  
										<?php echo $dataWines[1]["nameDish"]." $". $dataWines[1]["price"]; ?> </a></dt>
										<dd><?php echo $dataWines[1]["description"]; ?></dd>
										
										<dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataWines[2]["image"]; ?> >  
										<?php echo $dataWines[2]["nameDish"]." $". $dataWines[2]["price"]; ?> </a></dt>
										<dd><?php echo $dataWines[2]["description"]; ?></dd>
										
										
										
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>

							</div><!-- /rm-back -->

						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content">
    <!-- MAINS -->
									<h4>Platos Principales</h4>
									<dl>
									    
									    	<dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[0]["image"]; ?> >  
										<?php echo $dataMains[0]["nameDish"]." $". $dataMains[0]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[0]["description"]; ?></dd>
                                    
                                        <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[1]["image"]; ?> >  
										<?php echo $dataMains[1]["nameDish"]." $". $dataMains[1]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[1]["description"]; ?></dd>
                                        
                                               <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[2]["image"]; ?> >  
										<?php echo $dataMains[2]["nameDish"]." $". $dataMains[2]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[2]["description"]; ?></dd>

                                               <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[3]["image"]; ?> >  
										<?php echo $dataMains[3]["nameDish"]." $". $dataMains[3]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[3]["description"]; ?></dd>

                                               <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[4]["image"]; ?> >  
										<?php echo $dataMains[4]["nameDish"]." $". $dataMains[4]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[4]["description"]; ?></dd>
                                               <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[5]["image"]; ?> >  
										<?php echo $dataMains[5]["nameDish"]." $". $dataMains[5]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[5]["description"]; ?></dd>

                                               <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[6]["image"]; ?> >  
										<?php echo $dataMains[6]["nameDish"]." $". $dataMains[6]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[6]["description"]; ?></dd>

                                               <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataMains[7]["image"]; ?> >  
										<?php echo $dataMains[7]["nameDish"]." $". $dataMains[7]["price"]; ?> </a></dt>
										<dd><?php echo $dataMains[7]["description"]; ?></dd>

                                                

                                    
									    
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front">
								
							</div>

							<div class="rm-back">
								<span class="rm-close">Close</span>
								<div class="rm-content">
								
    <!-- SALADS -->
									<h4>Ensaladas</h4>
									<dl>
										  <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataSalads[0]["image"]; ?> >  
										<?php echo $dataSalads[0]["nameDish"]." $". $dataSalads[0]["price"]; ?> </a></dt>
										<dd><?php echo $dataSalads[0]["description"]; ?></dd>
                                      
										  <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataSalads[1]["image"]; ?> >  
										<?php echo $dataSalads[1]["nameDish"]." $". $dataSalads[1]["price"]; ?> </a></dt>
										<dd><?php echo $dataSalads[1]["description"]; ?></dd>
                                      
										  <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataSalads[2]["image"]; ?> >  
										<?php echo $dataSalads[2]["nameDish"]." $". $dataSalads[2]["price"]; ?> </a></dt>
										<dd><?php echo $dataSalads[2]["description"]; ?></dd>
										
									</dl>
    <!-- DESSERTS -->	
									<h4>Postres</h4>
									<dl>
										 <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDesserts[0]["image"]; ?> >  
										<?php echo $dataDesserts[0]["nameDish"]." $". $dataDesserts[0]["price"]; ?> </a></dt>
										<dd><?php echo $dataDesserts[0]["description"]; ?></dd>
                                      
										  <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDesserts[1]["image"]; ?> >  
										<?php echo $dataDesserts[1]["nameDish"]." $". $dataDesserts[1]["price"]; ?> </a></dt>
										<dd><?php echo $dataDesserts[1]["description"]; ?></dd>
                                      
										  <dt><a class="rm-viewdetails" 
										data-thumb = <?php echo $dataDesserts[2]["image"]; ?> >  
										<?php echo $dataDesserts[2]["nameDish"]." $". $dataDesserts[2]["price"]; ?> </a></dt>
										<dd><?php echo $dataDesserts[2]["description"]; ?></dd>
    <!-- CONTACT -->	
									<div class="rm-order">
										<p><strong>Deseas que nos encarguemos de tu fiesta o evento?</strong> Contactanos y te ayudaremos a organizar tu evento: <strong>626.511.1170</strong></p>
									</div>
								</div><!-- /rm-content -->
							</div><!-- /rm-back -->

						</div><!-- /rm-right -->
					</div><!-- /rm-wrapper -->

				</div><!-- /rm-container -->

			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			
			});
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