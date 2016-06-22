<?php 
session_start();
require 'db/db.php';

$dataCategories = $database->query("SELECT DISTINCT category
FROM tbmenu;")->fetchAll(PDO::FETCH_ASSOC);

$dataState=$database->query("SELECT DISTINCT state
FROM tbmenu;")->fetchAll(PDO::FETCH_ASSOC);

$dataFood="";
$action=0;

if($_POST){
    
    if($_POST["value"] == 1){
        
        $name= $_FILES['image']['name'];
        $tmp= $_FILES['image']['tmp_name'];
        $folder='img/food';
        //the files are saved in a temp folder
        
        move_uploaded_file($tmp,$folder.'/'.$name);
        $imagePath=($folder.'/'.$name);
        
        $database->insert("tbmenu", [
        "idUserMod" => $_SESSION['idUser'],
        "nameDish" => $_POST["nameDish"],
        "category" => $_POST["category"],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "state" => $_POST["state"],
        "dayMod" => date("Y/m/d"),
        "image" => $imagePath /*$_POST["image"]*/
    ]);
        
        header ("Location: principal.php#contMenu");
    }
    
    if($_POST["value"] == 2){
        $name= $_FILES['image']['name'];
        $tmp= $_FILES['image']['tmp_name'];
        $folder='img/food';
        //the files are saved in a temp folder
        
        move_uploaded_file($tmp,$folder.'/'.$name);
        $imagePath=($folder.'/'.$name);
        
        $database->update("tbmenu", [
        "idUserMod" => $_SESSION['idUser'],
        "nameDish" => $_POST["nameDish"],
        "category" => $_POST["category"],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "state" => $_POST["state"],
        "dayMod" => date("Y/m/d"),
        "image" =>$imagePath, /* $_POST["image"]], */
                                "idDish" => $_POST["idDish"]]);
        
        header ("Location: principal.php#contMenu");
    }
    
    if($_POST["value"] == 3){
        $database->delete("tbmenu",
                         
                         [
                             "idDish" => $_POST["idDish"]
                         ]);
        
        header ("Location: principal.php#contMenu");
    }
    
}

    if($_GET){
        $option = $_GET["option"];
        $id = $_GET["id"];
        
            if($option == 1){
               
             $action=1;
            }
        
            if($option == 2){
                $dataFood = $database->select("tbmenu",
                                             ["idDish",
                                              "idUserMod",
                                              "nameDish",
                                              "category",
                                              "description",
                                              "price",
                                              "state",
                                              "dayMod",
                                              "image"], [
                                                 "idDish" => $id]);
             $action = 2;
            }
        
            if($option == 3){
                
                 $dataFood = $database->select("tbmenu",
                                             ["idDish",
                                              "idUserMod",
                                              "nameDish",
                                              "category",
                                              "description",
                                              "price",
                                              "state",
                                              "dayMod",
                                              "image"], [
                                                 "idDish" => $id]);
                
              $action = 3;   
            }
        
    }

  
?>



<html lang="en">

<head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
        
</head>
<body>
      <div  class="foodMenu font-style_3">
      
       <div class="containerCenter">
           <div class="row">
               <div class="foodMenu-user col-xs-12 col-sm-12 col-md-6">
                  <h2>Administrar Platillos</h2>
                   <div class="foodMenu-input">
       <?php
    if($action == 1){
       echo "<form method='post' action='' enctype='multipart/form-data'>
          
           </br><br/>
           
           <div class='row'>
                <div class='col-md-6'>
                <label>Nombre Platillo</label>
                <input class='form-control' type= 'text' name='nameDish' placeholder='Ingresa un nombre' required>
                </div>
           
                <div class='col-md-6'>
                <label>Categoria</label>
                <select class='foodMenu-select' name='category' >
                <option value='drinks'>Bebidas</option>
                <option value='wines'>Vinos</option>
                <option value='mains'>Plato fuerte</option>
                <option value='salads'>Ensalada</option>
                <option value='desserts'>Postre</option>
                </select>
                </div>
           </div>
           
           <div class='row'>
           <div class='col-md-12'>
           <label>Descripcion</label>
           <textarea class='form-control' name='description' cols='30' rows='5' placeholder='Coloca una descripcion' required></textarea>
           </div>
           </div>
           
           <div class='row'>
           <div class='col-md-6'>
           <label>Precio ($ USDolar)</label>
           <input class='form-control' type='text' name='price' placeholder='0' required>
           </div>
           
           <div class='col-md-6'>
           <label>Estado</label>
           <select class='foodMenu-select' name='state'>
                <option value='active'>Activo</option>
                <option value='inactive'>Inactivo</option>
           </select>
           </div>
           </div>
           
           <div class='row'>
           <div class='col-md-6'>
           <label>Seleccione una imagen</label>
           <input id='inputPhoto' type='file' name='image' required>
           </div>
           </div>
           
        <input type='hidden' name='value' value=1>
        <div class='row'>
        <div class='col-md-6'>
        <input class='foodMenu-buttons' type='submit' value='INSERTAR'>
        </div>
         <div class='col-md-6'>
        <input class='foodMenu-buttons' type='button' value='CANCELAR' onclick='history.back();'>
        </div>      
        </div>
            
        </form>";
                    }

    if($action == 2){
        echo $dataCategories[0]["category"];
       echo "<form method='post' action='' enctype='multipart/form-data'>
          
           
           
           <div class='row'>
                <div class='col-md-6'>
                <label>Nombre Platillo</label>
                <input class='form-control' type= 'text' name='nameDish' value=".$dataFood[0]["nameDish"]." placeholder='Ingresa un nombre' required>
                </div>
                
                <div class='col-md-6'>
                <label>Categoria</label>
                <select class='foodMenu-select' name='category' >";
                        for($i=0; $i<count($dataCategories); $i++){
                        if($dataCategories[$i]['category'] == $dataFood[0]['category']){
                        
                        echo "<option value=".$dataCategories[$i]['category']." selected>".$dataCategories[$i]['category']."</option>";
                        
                        
                        }else{
                            
                         echo   "<option value=".$dataCategories[$i]['category'].">".$dataCategories[$i]['category']."</option>";
                        
                        }
                        }
             echo   "</select>
                </div>
           </div>
           
            <div class='row'>
           <div class='col-md-12'>
           <label>Descripcion</label>
           <textarea class='form-control' name='description' cols='30' rows='5' placeholder='Coloca una descripcion' required>".$dataFood[0]["description"]."</textarea>
           </div>
           </div>
           
           <div class='row'>
           <div class='col-md-6'>
           <label>Precio ($ USDolar)</label>
           <input class='form-control' type='text' name='price' value=".$dataFood[0]["price"]." required>
           </div>
           
           <div class='col-md-6'>
           <label>Estado</label>
           <select class='foodMenu-select' name='state' >";
                        for($i=0; $i<count($dataState); $i++){
                        if($dataState[$i]['state'] == $dataFood[0]['state']){
                        
                        echo "<option value=".$dataState[$i]['state']." selected>".$dataState[$i]['state']."</option>";
                        
                        
                        }else{
                            
                         echo   "<option value=".$dataState[$i]['state'].">".$dataState[$i]['state']."</option>";
                        
                        }
                        }
             echo   "</select>
           </div>
           </div>
           
           <div class='row'>
           <div class='col-md-6'>
           <label>Seleccione una imagen</label>
           <input id='inputPhoto' type='file' name='image' value=".$dataFood[0]["image"]." required>
           </div>
           </div>
          
           <input type='hidden' name='idDish' value=".$dataFood[0]["idDish"].">
           
        <input type='hidden' name='value' value=2>
        <div class='row'>
        <div class='col-md-6'>
        <input class='foodMenu-buttons' type='submit' value='GUARDAR CAMBIOS'>
        </div>
         <div class='col-md-6'>
        <input class='foodMenu-buttons' type='button' value='CANCELAR' onclick='history.back();'>
        </div>      
        </div>
            
        </form>";
                    }
    
     if($action == 3){
       echo "<form method='post' action='foodMenuSettings.php' enctype='multipart/form-data'>
         <h2>Seguro que desea eliminar este elemento?</h2>
         <p>".$dataFood[0]["nameDish"]."<p>
         
          <input type='hidden' name='idDish' value=".$dataFood[0]["idDish"].">
           
            
        <input  class='foodMenu-buttons' type='hidden' name='value' value=3>
        <input  class='foodMenu-buttons' type='submit' value='CONTINUAR'>
        <input  class='foodMenu-buttons' type='button' value='CANCELAR' onclick='history.back();'>
            
        </form>
        
        ";
                    }
            
            ?>
                   </div>
                </div>
                
                <div class="foodMenu-user hidden-sm hidden-xs col-md-6">
                
                <a href="index.php#menu">Visualizar el MENÚ</a>
                  <?php 
                    if($dataFood==""){
                        echo "<img src='img/food/parrillaExample.jpg'>";
                    }else{
                        echo "<img src=".$dataFood[0]["image"].">";
                    }
                    
                    ?>
                </div>
                
               </div>
            
            
             
         <div class="row">
                 <div class="foodMenu-user col-xs-12 col-sm-12 col-md-6">
                          <h3>Imposible is Nothing.</h3>
                    </div>
        </div> 
    </div>
           
    </div>   
            
</body>