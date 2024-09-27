<?php
//crear clase Ser gato

class gato extends animal{
    private $raza;
    private $colorPelo;

    public function __construct($nombre, $medio, $raza,$colorPelo){
        parent::__construct($nombre, "felis catus", $medio,"Caliente","mamifero");
        $this -> setRaza($raza);
        $this -> setColorPelo($colorPelo);
    }

    public function getRaza(){
        return $this -> raza;
    }
    public function setRaza($raza){
       if($raza != null){
           $this -> raza = $raza;
       }else{
           $this -> raza = "desconocida";
       }
    }
    public function getColorPelo(){
        return $this -> colorPelo;
    }
    public function setColorPelo($colorPelo){
       if($colorPelo != null){
           $this -> colorPelo = $colorPelo;
       }else{
           $this -> colorPelo = "desconocido";
       }
    }
    //function 
    public function toString(){
        return parent::__toString()." ".$this->getRaza()." ".$this->getColorPelo();
    }
    public function ronronear(){
        return "rrrrrrrrrr";
    }
    public function dormir(){
        return "zzzzzzzzzz";
    }

}

?>