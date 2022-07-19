<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php

include("../conexion/conexion.php");
$conexion = new Conexion("localhost:3306","wikicar","root","");

if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    

    $consulta="SELECT*FROM user where User_Name ='$name' and Password = '$password' and Email = '$email'";

    $resultado=mysqli_query($conexion->getConexion(),$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){            
        header("location:../homescreen/homescreen.php");
    }else{
    ?>
    <?php
    include("login.php");
    ?>
    <h3 class="bad">Authentication failed</h3>
    <?php
    }
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h3 class="bad">Complete the data</h3>
    <?php
}
//cerrar conexion
$conexion->setClose($conexion->getConexion());
?>