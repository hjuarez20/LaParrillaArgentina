<?php

/*In this section there are a table who show all the data charge from the data base of the table tbMenu*/
     
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
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <p class="font-style_1 title_table">Menú de Platillos</p>    
                               <a class="a-insert" href="foodMenuSettings.php?option=1&id=">Insertar</a>
                               
                                           
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
                        
                                    <td> <img src= ".$dataFood[$e]["image"]." width='100' height='100'  style='-webkit-border-radius: 100%;-moz-border-radius: 100%;border-radius: 100%;padding:0px;' > </td>
                                    
                                    <td>
          
                                    <a href='foodMenuSettings.php?option=2&id=".$dataFood[$e]["idDish"]."'>Editar</a>  
                                    
                                    <a href='foodMenuSettings.php?option=3&id=".$dataFood[$e]["idDish"]."'>Eliminar</a>
                                    
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

</body>

</html>