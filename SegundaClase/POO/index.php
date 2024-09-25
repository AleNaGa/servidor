<b>
<?php 
require("./Model/Coche.php");
require("./Model/Persona.php");

$miCoche = new Coche("Audi", "A4", "Negro", "ABC 123", 50000);

echo Coche::RUEDAS;
echo "<br/>";

echo $miCoche::RUEDAS;
echo "<br/>";

echo Coche::$cuantosSeHanFabricado;
echo "<br/>";

echo $miCoche::$cuantosSeHanFabricado;
echo "<br/>";

echo Coche::getCuantosSeHanFabricado();
echo "<br/>";

echo $miCoche."<br/>";

$jurado = new Persona('Antonio', "Jurado");

echo $jurado->nombre;
echo "<br/>";

$jurado->nombre = 'Maria';
echo "<br/>";
$jurado->apellido = 'Sisamon';
echo "<br/>";

echo $jurado;

//Opcional: Trait https://diego.com.es/programacion-orientada-a-objetos-en-php
?>
</b>