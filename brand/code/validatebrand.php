<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</html>
<?php

include("../../conexion/conexion.php");

$conexion = new Conexion("localhost:3306","wikicar","root","");

if(strlen($_POST['brand']) >=1 && strlen($_POST['founders']) >=1 && strlen($_POST['date']) >=1 && strlen($_POST['country']) >=1 && strlen($_POST['history']) >=1){
    $brand=trim($_POST['brand']);
    $founders=trim($_POST['founders']);
    $date=trim($_POST['date']);
    $country=trim($_POST['country']);
    $history=trim($_POST['history']);

    $consulta="insert into brand(Brand_name, Founders, Foundation_date, Country, Brand_history) VALUES ('$brand','$founders','$date','$country','$history')";

    $resultado = mysqli_query($conexion->getConexion(),$consulta);

    if($resultado){
        ?>
        <?php
        include("brand.php");
        ?>
        <h3 class="ok">Registration complete,go home</h3>
        <?php
    }else{
        ?>
        <?php
        include("brand.php");
        ?>
        <h3 class="bad">An error has occurred</h3>
        <?php
    }   
    }else{
        ?>
         <?php
        include("brand.php");
        ?>
        <h3 class="bad">Complete the data</h3>
        <?php
    }
$conexion->setClose($conexion->getConexion());
