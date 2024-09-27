<?php
//crear clase Ser Vivo
Class serVivo{
    //atributos
    public $nombre;
    public $nombreCientif;
    public $familia;
    public $medio;

    //metodos
    public function __construct($nombre, $nombreCientif, $familia, $medio)
    {
        $this->setNombre($nombre);
        $this->setNombreCientif($nombreCientif);
        $this->setFamilia($familia);
        $this->setMedio($medio);
    }
    //getters y setters

    public function getNombre(){
        return $this->nombre;
    }
    private function setNombre($nombre){
        if($nombre !=null){
            $this->nombre = $nombre;
        }else{
            $this-> nombre = "default";
        }
    }
    public function getNombreCientif(){
        return $this->nombreCientif;
    }
    private function setNombreCientif($nombreCientif){
        if($nombreCientif !=null){
            $this->nombre = $nombreCientif;
        }else{
            $this-> nombre = "default Cientifico";
        }
    }

    public function getFamilia(){   
        return $this->familia;
    }
    private function setFamilia($familia){
        if($familia !=null){
            $this->familia = $familia;
        }else{
            $this->familia = "defaultFamilia";
        }
    }

    public function getMedio(){
        return $this->medio;
    }
    private function setMedio($medio){
        if($medio !=null){
            $this->medio = $medio;
        }else{
            $this->medio = "defaultMedio";
        }
    }
    //métodos
    public function __toString()
    {
        return $this->getNombre() . " " . $this->getNombreCientif() . " " . $this->getFamilia() . " " . $this->getMedio();
    }
    
    public function reproduce(){
       $hijo = new SerVivo($this->nombre,$this->nombreCientif,$this->familia,$this->medio);
       return $hijo;
    }



}
?>