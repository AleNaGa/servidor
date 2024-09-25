<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello World</p>
    <p><!-- el php tiene que estar en etiquetas de html-->
        <?php

        // comentar
        echo "Salida por Consola";
        echo "la suma de 1+1 es: ". 1+1;
        $variable = 1;
        $nombre = "Jorge";
        define("constante1","constante string");
        $variable++;
        $variable === $variable;
        $variable !== $variable;
        ?>
    </p>

    <!--Formularios GET -->
    <form action="index.php" method="GET">
        <input type="text" id= "nombre" name="nombre" placeholder="escribe tu nombre" >
        <input type="text" id= "edad" name="edad" placeholder="escribe tu edad">
        <input type="text" id= "curso" name="curso" placeholder="escribe tu curso">
        <input type="submit" value="enviar">
    </form>
    <p>
        <?php
        if(isset($_GET["nombre"]) && isset($_GET["edad"]) && isset($_GET["curso"])){ //PARA CONTROLAR QUE EXISTA
            echo "Tu nombre es " .  $_GET["nombre"];
            echo "Tu edad es " . $_GET["edad"];
            echo "Tu curso es " . $_GET["curso"];
        }
        ?>
    </p>

    <!--Formularios POST -->
    <form action="index.php" method="POST">
        <input type="password" id= "Password" name="password" placeholder="contraseña" >
        <input type="submit" value="enviar">
    </form>
    <p>
        <?php
        if(isset($_POST["password"])){//PARA CONTROLAR QUE EXISTA
          echo "Tu contraseña es " .  $_POST["password"];
    }
        ?>
    </p>

    <!-- Formulario suma -->
    <form action="index.php" method="POST">
        <input type="text" id= "num1" name="num1" placeholder="escribe el primer numero" >
        <input type="text" id= "num2" name="num2" placeholder="escribe el segundo numero" >
        <input type="submit" value="enviar">
    </form>
    <p>
        <?php
        if(isset($_POST["num1"]) && isset($_POST["num2"])){//PARA CONTROLAR QUE EXISTA
          echo "La suma de los numeros es: " .  (int)$_POST["num1"] + (int)$_POST["num2"];//casteo
        }
        ?>
    </p>

    <!-- funciones php -->
    <?php function getVar($var){
        if(isset($var)){
            return $var;
        }else{
            return "no existe"; 
        }
    }

    //arrays
    $PROFES = ["MARIAFER", "Juan", "Pedro"];
    foreach($PROFES as $prof){
        echo $prof;
    }
    for($i=0; $i<count($PROFES); $i++){
        echo $PROFES[$i];
    }
    ?>
    <!-- forma bonita-->
    <?php foreach($PROFES as $prof): ?>
        <h4><?= $prof; ?></h4>
    <?php endforeach; ?>

    <!-- arrays asociativos -->
    <?php $PROFES = ["MARIAFER" => 1, "Juan" => 2, "Pedro" => 3]; ?>
    <?php foreach($PROFES as $prof => $num): ?>
        <h4><?= $prof; ?> <?= $num; ?></h4>
    <?php endforeach; ?>

    <!-- arrays multidimensionales -->
    <?php $PROFES = ["MARIAFER" => ["num1" => 1, "num2" => 2], "Juan" => ["num1" => 3, "num2" => 4], "Pedro" => ["num1" => 5, "num2" => 6]]; ?>
    <?php foreach($PROFES as $prof => $num): ?>
        <h4><?= $prof; ?> <?= $num["num1"]; ?> <?= $num["num2"]; ?></h4>
    <?php endforeach; ?>

    <?php include("php/metodos.php") ?>


</body>
</html>