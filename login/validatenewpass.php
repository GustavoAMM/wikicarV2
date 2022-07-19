<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php

include("../conexion/conexion.php");
$conexion = new Conexion("localhost:3306","wikicar","root","");

if(strlen($_POST['email']) >= 1 && strlen($_POST['password']) >=1){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $consulta = "update user set Password = '".$password."' where email = '".$email."'";
    $resultado = mysqli_query($conexion->getConexion(),$consulta);
    
    if($resultado){
        ?>
        <?php
        include("login.php");
        ?>
        <h3 class="ok">don't forget your new password :)</h3>
        <?php
    }else{
        ?>
        <?php
        include("createaccount.php");
        ?>
        <h3 class="bad">An error has occurred</h3>
        <?php
    }
}else{
    ?>
    <?php
    include("createaccount.php");
    ?>
    <h3 class="bad">Complete the data</h3>
    <?php
}

$conexion->setClose($conexion->getConexion());