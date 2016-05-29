<?php
     
   //  require 'db/db.php';
    $dataFood = $database->select("tbmenu", "*",[
                                            "ORDER" => "category"
                                            ]);
    ?>
    
    <html>
    
    <head>
    <meta charset="UTF-8">
  
</head>

    <body>

                <div id="AdministrationDishes" class="containerCenter tableSize ">
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalInsertDish">Insertar</button>
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

            
            <div id="modalInsertDish" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Panel Administracion de Platillos</h4>
      </div>
      <div class="modal-body">
    <!--INICIO DEL FORM DE INSERTAR-->   
        <form id="insert-form" action="" method="post">
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

    

</body>

</html>