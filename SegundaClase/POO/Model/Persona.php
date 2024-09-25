<?php 

class Persona {
    private $nombre;
    protected $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    //SOLO PARA ATRIBUTOS PRIVADOS O PROTECTED
    public function __get($atributo) {
        return 'Has usado el método mágico get';
    }

    public function __set($atributo, $nuevoValor) {
        echo 'Has usado el método mágico set para intentar setear '.$nuevoValor.' pero va a ser que no';
    }

    public function __toString()
    {
        return $this->nombre." ".$this->apellido;
    }
}

?>