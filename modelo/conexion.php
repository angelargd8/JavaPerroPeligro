<?php
//cadena para la conexion a la base de datos

$usuario = "root";
$clave="";
$servidor= "localhost";
$base = "comunicacion";

$cnx= mysqli_connect($servidor, $usuario, $clave, $base);

//$cnx= mysqli_connect("localhost", "root", "", "usuarios");


if (!$cnx)
{
	die ("no se logro la conexion");
}
//echo "conexion exitosa";

?>