<?php

 //require 'db/db.php';
 $data = $database->select("tbusers", "*");

?>
    <html>

        <head>        </head>
        
        <body>
            
        <div class="containerCenter tableSize ">
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <article class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <th id="name">Nombre</th>
                                        <th id="id">Identificación</th>
                                        <th id="login">Login</th>
                                    </tr>
                                </table>
                            </article>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <?php
                                    $len = count($data);
                                    for($i=0; $i<$len; $i++){
                                    echo  "<tr><td>".$data[$i]["name"]."</td><td>".$data[$i]["identification"]."</td><td>".$data[$i]["login"]."</td><td>"."</td><td><a href='editar.php?id=".$data[$i]["idUser"]."'>Editar</a> <a href='delete.php?id=".$data[$i]["idUser"]."'>Eliminar</a></td></tr>";
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