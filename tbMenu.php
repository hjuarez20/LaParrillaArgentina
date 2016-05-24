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

        <div class="containerCenter tableSize ">
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
                                   
                                    for($e=0; $e< count($dataFood); $e++){
                                    echo  "<tr>
                                    <td>".$dataFood[$e]["nameDish"]."</td>
                                    <td>".$dataFood[$e]["category"]."</td>
                                    <td>".$dataFood[$e]["description"]."</td><td>".$dataFood[$e]["price"]."</td>
                                    <td>".$dataFood[$e]["state"]."</td>
                                    <td>".$dataFood[$e]["image"]."</td>
                                    <td><a href='editar.php?id=".$dataFood[$e]["idDish"]."'>Editar</a> <a href='delete.php?id=".$dataFood[$e]["idDish"]."'>Eliminar</a></td></tr>";
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