<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulario multiplicacion -->
    <form action="multiplicacion.php" method="GET">
        <input type="text" id= "num1" name="num1" placeholder="escribe el primer numero" >
        <input type="text" id= "num2" name="num2" placeholder="escribe el segundo numero" >
        <input type="text" id= "num3" name="num3" placeholder="escribe el segundo numero" >
        <input type="submit" value="enviar">
    </form>
    <p>
        <?php
        if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["num3"])){//PARA CONTROLAR QUE EXISTA
          echo "La multiplicacion de los numeros es: " .  (int)$_GET["num1"] * (int)$_GET["num2"] * (int)$_GET["num3"];//casteo
        }
        ?>
    </p>
</body>
</html>