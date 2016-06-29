<?php
/*In this section there are a table who show all the data charge from the data base of the table tbClient*/
 //require 'db/db.php';
$data = $database->select("tbusers", "*", ["state"=>"Activo"]);


?>
    <html>

        <head>        </head>
        
        <body>
            
        <div class="containerCenter tableSize ">
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                        <p class="font-style_4 title_table">Login</p>   
                            <article class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <th id="name">Nombre</th>
                                        <th id="id">Identificación</th>
                                        <th id="login">Login</th>
                                        <th id="opciones">Opciones</th>
                                    </tr>
                                </table>
                            </article>
                            
                            <div class="tbl-content">
                               
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <?php
                                    $len = count($data);
                                    for($i=0; $i<$len; $i++){
                                    echo  "<tr><td>".$data[$i]["name"]."</td><td>".$data[$i]["identification"]."</td><td>".$data[$i]["login"]."</td><td>"."</td><td><a href='edittable.php?type=3&id=".$data[$i]["idUser"]."'>Editar</a> <a href='eliminator.php?type=3&id=".$data[$i]["idUser"]."' >Eliminar</a></td></tr>";
                }
            ?>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
<!--
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      
    </div>

  </div>
</div>
-->
</body>
</html>