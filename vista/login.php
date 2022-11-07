<?php
session_start(); 
ob_start();

$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$_SESSION['id']="";
//$_SESSION['rol']="";

include("conexion.php");
global $cnx;

$consulta= mysqli_query($cnx, "SELECT * FROM usuarios WHERE nombre='$nombre' AND correo= '$correo'");

if ($resultado = mysqli_fetch_array($consulta))
{
    //$_SESSION['usuario']= $usuario;
         
    echo "<script> 
        alert('Bienvenido de vuelta!');
        </script>";

    include("menu_principal.html");      

}
else
{
    
    echo "<script> 
        alert('Atención, ingrese bien los datos!');
        </script>";
        include("index.html");
}


?>