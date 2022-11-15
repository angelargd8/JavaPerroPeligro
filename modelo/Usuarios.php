<?php

class UsuariosBD{
    protected String $name;
    protected $id;
    protected String $tipo;

    public function __construct(String $name, String $tipo)
    {
        $this->name = $name;
        $this->tipo = $tipo;
    }

    public function Bienvenida(){
        return "Bienvenido $this->name";
    }

    public function getName(){
        return $this->name;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
}

class Administrador extends UsuariosBD{

    protected $puntaje;

    public function __construct($nom, $tipo,$puntaje){
        $this->puntaje = $puntaje;
        parent::__construct($nom, $tipo);
    }
    
    public function mPuntaje(){
        return "Puntaje Anterior: $this->puntaje";
    }
}

class Humilde extends UsuariosBD{
    protected $puntaje;

    public function __construct($nom, $tipo,$puntaje){
        $this->puntaje = $puntaje;
        parent::__construct($nom, $tipo);
    }

    public function mPuntaje(){
        return "Puntaje Anterior: $this->puntaje";
    }
}
?>