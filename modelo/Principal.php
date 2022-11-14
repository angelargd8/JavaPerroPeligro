<?php

include("../modelo/conexion.php");
include("../modelo/Usuarios.php");

class Principal{

    public $us; 

    public function __construct()
    {
        $nom = $_SESSION["Nombre"];
        $tipo = $_SESSION["Tipo"];
        if($tipo == "Administrador"){
            $this->us = new Administrador($nom, $tipo);
        }else{
            $this->us = new Humilde($nom, $tipo);
        }
        
    }

    public function nombre(){
        return $this->us->getName();
    }

    public function tipo(){
        return $this->us->getTipo();
    }

    public function vista(){
        $this->us->vista();
    }
    

}
$obj = new Principal();
?>