<?php

include("../conexion/conexion.php");
$conexion = new Conexion("localhost:3306","wikicar","root","");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$consulta="SELECT*FROM user where User_Name ='$name' and Password = '$password' and Email = '$email'";

$resultado=mysqli_query($conexion->getConexion(),$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){            
    header("location:../homescreen/homescreen.php");
}else{
    ?>
    <h3 class="bad">Authentication failed</h3>
    <?php
}
//liberar memoria de las consultas
mysqli_free_result($resultado);
//cerrar conexion
$conexion->setClose($conexion->getConexion());
?>