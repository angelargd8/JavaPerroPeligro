<?php

include("../modelo/conexion.php");
include("../modelo/Usuarios.php");

class Principal{

    public $us; 

    public function __construct()
    {
        $nom = $_SESSION["Nombre"];
        $tipo = $_SESSION["Tipo"];
        $puntos = $_SESSION["Puntos"];
        if($tipo == "Administrador"){
            $this->us = new Administrador($nom, $tipo,$puntos);
        }else{
            $this->us = new Humilde($nom, $tipo,$puntos);
        }
        
    }

    public function nombre(){
        return $this->us->getName();
    }

    public function tipo(){
        return $this->us->getTipo();
    }

    public function puntos(){
        echo "<script>console.log('EntroAqui');</script>";
        return $this->us->mPuntaje();
    }

    public function cambiarPuntos($pun){
        $this->us->setPuntaje($pun);
    }
    

}
$obj = new Principal();

inicio();

function inicio(){
    $obj = new Principal();
}
?>