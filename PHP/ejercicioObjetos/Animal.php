<?php
//crear clase Ser animal extends ser vivo
Class animal extends SerVivo{

    private $sangre;
    private $especie;

    //metodos
    public function __construct($nombre, $nombreCientif, $medio,$sangre,$especie){
        parent::__construct($nombre, $nombreCientif, "Animalia", $medio);
        $this->setSangre($sangre);
        $this->setEspecie($especie);
    }

    private function setSangre($sangre){
        if($sangre !=null){
            $this->sangre = $sangre;
        }else{
            $this->sangre = "defaultSangre";
        }
    }
    public function getSangre(){
        return $this->sangre;
    }
    private function setEspecie($especie){
        if($especie !=null){
            $this->especie = $especie;
        }else{
            $this->especie = "defaultEspecie";
        }
    }
    public function  getEspecie(){
        return $this->especie;
    }

    //funciones
    public function toString(){
        return parent::__toString()." ".$this->getSangre()." ".$this->getEspecie();
    }
    public function alimentarse($serVivo){
        $animal = new serVivo($serVivo->getNombre(),$serVivo->getNombreCientif(),$serVivo->getFamilia(),$serVivo->getMedio());
        return "El animal " + $animal.parent::getNombre() + " se ha alimentado  de " + $serVivo;
    }

}
?>