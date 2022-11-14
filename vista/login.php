<?php
session_start(); 
ob_start();

$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$_SESSION['id']="";
//$_SESSION['rol']="";

include("../modelo/conexion.php");
global $cnx;

$consulta= mysqli_query($cnx, "SELECT * FROM usuarios WHERE nombre='$nombre' AND correo= '$correo'");

if ($resultado = mysqli_fetch_array($consulta))
{
    //$_SESSION['usuario']= $usuario;
         
    echo "<script> 
        alert('Bienvenido de vuelta a comunicación para todos!');
        </script>";
    $_SESSION["Nombre"] = $nombre;
    $_SESSION["Tipo"] = $resultado["Tipo_usuario"];
    include("../vista/menu_principal.php");      

}
else
{
    
    echo "<script> 
        alert('Atención, ingrese bien los datos!');
        </script>";
        include("../vista/index.html");
}


?>