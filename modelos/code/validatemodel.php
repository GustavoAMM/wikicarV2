<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css" >
</head>
</html>
<?php

include("../../conexion/conexion.php");
$conexion = new Conexion("localhost:3306","wikicar","root","");

    if(strlen($_POST['name']) >= 1 && strlen($_POST['type']) >= 1 && strlen($_POST['tank']) >= 1 && strlen($_POST['year']) >= 1 && strlen($_POST['starting']) >= 1 && strlen($_POST['actual']) >= 1 && strlen($_POST['modification']) >= 1 ){   
       $nombre=trim($_POST['name']);
       $tipo=trim($_POST['type']); 
       $puerta=trim($_POST['doors']);
       $asiento=trim($_POST['seats']);
       $tanque=trim($_POST['tank']);
       $modelo=trim($_POST['year']);
       $pSalida=trim($_POST['starting']);
       $pActual=trim($_POST['actual']);
       $configuracion=trim($_POST['modification']);

       $consulta="insert into model(Model_name,Model_type,Doors, Seats, GasTank_capacity, Model_year, Starting_price, Actual_price, Configuration) VALUES ('$nombre','$tipo','$puerta','$asiento','$tanque','$modelo','$pSalida','$pActual','$configuracion')";
       $resultado = mysqli_query($conexion->getConexion(),$consulta);

       if($resultado){
        ?>
        <?php
        include("model.php");
        ?>
        <h3 class="ok">Registration complete,go home</h3>
        <?php
    }else{
        ?>
         <?php
        include("model.php");
        ?>
        <h3 class="bad">An error has occurred</h3>
        <?php
    }
}else{
    ?>
    <?php
    include("model.php");
    ?>
    <h3 class="bad">Complete the data</h3>
    <?php
}

$conexion->setClose($conexion->getConexion());