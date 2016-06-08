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
           </br>
           <label>Seleccione una imagen</label>
    <input type="file" name="txtImage"/><br/><br/>
            <button type="submit" name="saveChanges">Guardar Cambios</button>
        </form>
</body>