<?php
session_start(); 
ob_start();

$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$_SESSION['id']="";
//$_SESSION['rol']="";

include("../modelo/conexion.php");
global $cnx;

$sql= "INSERT INTO `usuarios`(`nombre`, `correo`,`Tipo_usuario`) VALUES ('$nombre','$correo', 'Normal')";

if (mysqli_query($cnx, $sql))
{
    //$_SESSION['usuario']= $usuario;
         
    echo "<script> 
        alert('Nuevo usuario creado!');
        </script>";
    $_SESSION["id"] = $resultado["id"];
    $_SESSION["Nombre"] = $nombre;
    $_SESSION["Tipo"] = $resultado["Tipo_usuario"];
    $_SESSION["Puntos"] = $resultado["aciertos"];
    include("menu_principal.php");      

}
else
{
    
    echo "<script> 
        alert('Error');
        </script>";
        //include("index.html");
}


?>