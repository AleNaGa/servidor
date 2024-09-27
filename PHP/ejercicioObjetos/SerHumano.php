<?php
//crear clase Ser Humano

class serHumano extends Animal{

    private $velocidad;
    private $colorOjos;
    private $oficio;

    public function __construct($nombre, $medio, $colorOjos, $oficio) {
        parent::__construct($nombre, "Homo Sapiens", "Hominidae", $medio, "Caliente", "Mamífero");
        $this -> setColorOjos($colorOjos);
        $this -> setOficio($oficio);
    }

    //getterSetter

    public function getColorOjos() {
        return $this -> colorOjos;
    }

    public function setColorOjos($colorOjos) {
       if($colorOjos != null){
           $this -> colorOjos = $colorOjos;
       }else{
           $this -> colorOjos = "defaultColorOjos";
       }
    }

    public function getOficio() {   
        return $this -> oficio;
    }

    public function setOficio($oficio) {
        if($oficio != null){
            $this -> oficio = $oficio;
        }else{
            $this -> oficio = "defaultOficio";
        }
    }
    //funciones
    public function toString(){
        return parent::__toString()." ".$this->getColorOjos()." ".$this->getOficio();
    }
    public function saludar(){
        return "Hola, me llamo ".$this->getNombre();
    }
    public function trabajar(){
        return "Estoy trabajando de " + $this->getOficio();
    }
}

?>