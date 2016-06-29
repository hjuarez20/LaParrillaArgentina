<?php
/*In this section there are a table who show all the data charge from the data base of the table tbReservation*/

// require 'db/db.php';
 
$data = $database->select("tbreservations", "*");
?>
 <html>

    <head>    </head>

    <body>

        <div class="containerCenter tableSize ">
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <p class="font-style_4 title_table">Reservaciones</p> 
                            <article class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Fecha</th>
                                        <th>Cantidad de Personas</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                        
                                    </tr>
                                </table>
                            </article>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <?php
                                    $len = count($data);
                                    for($i=0; $i<$len; $i++){
                                        if($data[$i]["state"]==1){
                                            $state="Activo";
                                        }else{
                                            $state="Terminado";
                                        }
                                        
                                    echo  "<tr><td>".$data[$i]["clientName"]."</td><td>".$data[$i]["clientPhone"]."</td><td>".$data[$i]["clientEmail"]."</td><td>".$data[$i]["date"]."</td><td>".$data[$i]["peopleAmount"]."
                                    <td>".$state    ."</td>
                                    </td><td><a href='edittable.php?type=1&id=".$data[$i]["idReservation"]."'>Editar</a> <a href='eliminator.php?type=1&id=".$data[$i]["idReservation"]."'>Eliminar</a></td></tr>";
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