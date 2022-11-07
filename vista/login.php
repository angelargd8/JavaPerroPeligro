<?php
session_start(); 
ob_start();

$codigo = $_POST['usuario'];
$correo= $_POST['correo'];
//$_SESSION['nombre']="";
//$_SESSION['rol']="";

include("conexion.php");
global $cnx;

$consulta= mysqli_query($cnx, "SELECT * FROM usuarios WHERE usuario='$usuario' AND correo= '$correo'");

if ($resultado = mysqli_fetch_array($consulta))
{
    $_SESSION['usuario']= $usuario;
         
    //echo "<script> 
    //    alert('Bienvenido de vuelta!');
    //    </script>";

    //header("Location: menu.html");

    $consulta3= mysqli_query($cnx, "SELECT usuario FROM usuarios WHERE correo=$correo");

    $guardado4= mysqli_fetch_array($consulta3);

    $_SESSION['usuario']=$guardado4['usuario'];

  
        
   
    echo "<script>
    alert('Bienvenido de vuelta,  ".$guardado4['usuario']." ');
    window.location.replace('menu_principal.html');
    </script>";
    //header("Location: menu.html");
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