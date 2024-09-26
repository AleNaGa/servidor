<?php 
require("Vehiculo.php");
class Coche extends Vehiculo{
    const RUEDAS = 4;
    public static $cuantosSeHanFabricado = 1;
    private $precio;

    public function __construct($marca, $modelo, $color, $matricula, $precio) {
        parent::__construct($marca, $modelo, $color, $matricula);
        $this->precio = $precio;
    }

    public function getRuedas()
    {
        return self::Ruedas;
    }

    public static function getCuantosSeHanFabricado()
    {
        return self::$cuantosSeHanFabricado;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setprecio($precio) {
        $this->precio = $precio;
    }

    //No sirve para nada, pero se puede indicar el tipo.
    public function isMoreExpensiveThan(Coche $otroCoche) {
        return $this->precio > $otroCoche->getPrecio();
    }

    public function __toString()
    {
        return $this->marca.", ".$this->modelo.", ".$this->color.", ".$this->matricula.", ".$this->precio.".";
    }
}

?>