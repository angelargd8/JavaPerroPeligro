<?php
session_start(); 
ob_start();

$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$_SESSION['id']="";
//$_SESSION['rol']="";

include("../modelo/conexion.php");
global $cnx;

$sql= "INSERT INTO `usuarios`(`nombre`, `correo`) VALUES ('$nombre','$correo')";

if (mysqli_query($cnx, $sql))
{
    //$_SESSION['usuario']= $usuario;
         
    echo "<script> 
        alert('Nuevo usuario creado!');
        </script>";

    include("menu_principal.html");      

}
else
{
    
    echo "<script> 
        alert('Error');
        </script>";
        include("index.html");
}


?>