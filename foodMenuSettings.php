<?php 
require 'db/db.php';

$imagePath="";

if($_GET){
    $id=$_GET["id"];
    
    $imagePath="";
}

if(isset($_POST['saveChanges'])){
     /*--------------------section just for saving the image in the system----------*/
        $name= $_FILES['txtImage']['name'];
        $tmp= $_FILES['txtImage']['tmp_name'];
        $folder='dbImgs';
        //the files are saved in a temp folder
        move_uploaded_file($tmp,$folder.'/'.$name);
        $imagePath=($folder.'/'.$name);
        /*******************************************************************************/

}  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
</head>
<body>
        <form method="post" action="foodMenuSettings.php" enctype="multipart/form-data">
           </br><br/>
           <label>Nombre Platillo</label>
           <input type="text" name="nameDish" placeholder="Ingresa un nombre"><br/><br/>
           
           <label>Categoria</label>
           <select name="category" id="" >
                <option value="drinks">Bebidas</option>
                <option value="wines">Vinos</option>
                <option value="mains">Plato fuerte</option>
                <option value="salads">Ensalada</option>
                <option value="desserts">Postre</option>
           </select><br/><br/>
           
           <label>Descripcion</label>
           <textarea name="description" id="" cols="30" rows="5" placeholder="Coloca una descripcion"></textarea><br/><br/>
           
           <label>Precio ($ USDolar)</label>
           <input type="text" name="price" placeholder="0"><br/><br/>
           
           <label>Estado</label>
           <select name="state" id="">
                <option value="active">Activo</option>
                <option value="inactive">Inactivo</option>
           </select><br/><br/>
           
           
           <label>Seleccione una imagen</label>
    <input type="file" name="txtImage"/><br/><br/>
           
           
            <button type="submit" name="saveChanges">Guardar Cambios</button>
            
            
        </form>
</body>