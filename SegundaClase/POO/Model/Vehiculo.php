<?php

class Vehiculo {
    //public, private, protected
    protected $marca;
    protected $modelo;
    protected $color;
    protected $matricula;

    public function __construct($marca, $modelo, $color, $matricula) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->matricula = $matricula;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
}

?>