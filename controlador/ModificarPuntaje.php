<?php 
include("../modelo/conexion.php");

function modificar($id,$puntaje){
    global $cnx;
    $sql= mysqli_query($cnx, "UPDATE `usuarios` SET `aciertos` = $puntaje  WHERE `usuarios`.`id` = $id;");
    if(mysqli_query($cnx, $sql)){
        
    }
}


?>