<?php

 require 'db/db.php';
 $data = $database->select("tbreservations", "*");
 $dataFood = $database->select("tbmenu", "*",[
                                            "ORDER" => "category"
                                            ]);
 $user = $_GET['name'];




/*  Administracion de Platillos */
if($_POST){
    
    $database->insert("tbmenu", [
        "userMod" => "Oscar", /*$user*/
        "nameDish" => $_POST["nameDish"],
        "category" => $_POST["category"],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "state" => $_POST["state"],
        "dayMod" => date("Y/m/d"),
        "image" => $_POST["image"],
    ]);
}



?>
    <html>

    <head>
        <title>Administar</title>
        
        
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--Importar hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/principal.css" rel="stylesheet" type="text/css">
        <script src="js/backend.js"></script>
        <script src="js/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
        
    </head>

    <body>

        <div class="container menuSize">
            <section class="rigth">
                <p class="font-style_1 welcome">Welcome
                  <?php echo $user?>, <a href="admin123.php">Cerrar sesión</a></p>
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
                                        <th>Opciones</th>
                                    </tr>
                                </table>
                            </article>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <?php
                                    $len = count($data);
                                    for($i=0; $i<$len; $i++){
                                    echo  "<tr><td>".$data[$i]["clientName"]."</td><td>".$data[$i]["clientPhone"]."</td><td>".$data[$i]["clientEmail"]."</td><td>".$data[$i]["date"]."</td><td>".$data[$i]["peopleAmount"]."</td><td><a href='editar.php?id=".$data[$i]["idReservation"]."'>Editar</a> <a href='delete.php?id=".$data[$i]["idReservation"]."'>Eliminar</a></td></tr>";
                }
            ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div id="AdministrationDishes" class="containerCenter tableSize ">
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalInserDish">Insertar</button>
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <article class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <th>Platillo</th>
                                        <th>Categoria</th>
                                        <th>Descripcion</th>
                                        <th>Precio
                                            <br>(dolar)</th>
                                        <th>Estado
                                            <br>(active/Inactive)</th>
                                        <th>Imagen</th>
                                        <th>Opciones</th>
                                    </tr>
                                </table>
                            </article>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">

                                    <?php
                                    $len = count($dataFood);
                                    for($e=0; $e<$len; $e++){
                                    echo  "<tr>
                                    <td>".$dataFood[$e]["nameDish"]."</td>
                                    <td>".$dataFood[$e]["category"]."</td>
                                    <td>".$dataFood[$e]["description"]."</td><td>".$dataFood[$e]["price"]."</td>
                                    <td>".$dataFood[$e]["state"]."</td>
                                    <td>".$dataFood[$e]["image"]."</td>
                                    <td>
                                    
                                    <a data-toggle='modal' data-target='#modalEdit' id=".$dataFood[$e]["idDish"]."'>Editar</a> 
                                    
                                    <a data-toggle='modal' data-target='#modalDelete'
                                    id=".$dataFood[$e]["idDish"]."'>Eliminar</a>
                                    
                                    </td></tr>";
                }
            ?>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

            
            <div id="modalInserDish" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Panel Administracion de Platillos</h4>
      </div>
      <div class="modal-body">
    <!--INICIO DEL FORM DE INSERTAR-->   
        <form action="" method="post">
            <table>
                <tr>
                    <td><label>Nombre Platillo</label></td>
                    <td><input type="text" name="nameDish" placeholder="Ingresa un nombre"></td>
                </tr>
                <tr>
                   <td><label>Categoria</label></td>
                    <td>
                        <select name="category" id="" >
                            <option value="drinks">Bebidas</option>
                            <option value="wines">Vinos</option>
                            <option value="mains">Plato fuerte</option>
                            <option value="salads">Ensalada</option>
                            <option value="desserts">Postre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Descripcion</label></td>
                    <td><textarea name="description" id="" cols="30" rows="5" placeholder="Coloca una descripcion"></textarea></td>
                </tr>
                <tr>
                    <td>Precio ($ USDolar)</td>
                    <td><input type="text" name="price" placeholder="0"></td>
                </tr>
                <tr>
                    <td><label>Estado</label></td>
                    <td>
                        <select name="state" id="">
                            <option value="active">Activo</option>
                            <option value="inactive">Inactivo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Imagen</label></td>
                    <td><input type="text" name="image" placeholder="img/food/example.jpg"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-default">Agregar</button>  
                    </td>
                </tr>
            </table>
        </form>
      </div>
      <div class="modal-footer">
            
     
      </div>
    </div>

  </div>
</div> <!--FIN DEL POPUP DE INSERTAR-->

   
             <div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Editar content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Panel Administracion de Platillos</h4>
      </div>
      <div class="modal-body">
        
         <form action="" method="post">
            <table>
                <tr>
                    <td><label>Nombre Platillo</label></td>
                    <td><input type="text" name="nameDish" placeholder="Ingresa un nombre"></td>
                </tr>
                <tr>
                   <td><label>Categoria</label></td>
                    <td>
                        <select name="category" id="" >
                            <option value="drinks">Bebidas</option>
                            <option value="wines">Vinos</option>
                            <option value="mains">Plato fuerte</option>
                            <option value="salads">Ensalada</option>
                            <option value="desserts">Postre</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Descripcion</label></td>
                    <td><textarea name="description" id="" cols="30" rows="5" placeholder="Coloca una descripcion"></textarea></td>
                </tr>
                <tr>
                    <td>Precio ($ USDolar)</td>
                    <td><input type="text" name="price" placeholder="0"></td>
                </tr>
                <tr>
                    <td><label>Estado</label></td>
                    <td>
                        <select name="state" id="">
                            <option value="active">Activo</option>
                            <option value="inactive">Inactivo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Imagen</label></td>
                    <td><input type="text" name="image" placeholder="img/food/example.jpg"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-default">Editar</button>  
                    </td>
                </tr>
            </table>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> <!--FIN DEL POPUP EDITAR-->
        
            <div id="modalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Eliminar content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Panel Administracion de Platillos</h4>
      </div>
      <div class="modal-body">
        <label>Si esta seguro que desea eliminar este elemento, porfavor confirme.</label>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> <!--FIN POPUP ELIMINAR-->

        <section></section>

        <body>
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