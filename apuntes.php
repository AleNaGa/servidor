<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Pasos</title>
</head>
<body>
    <h1>Primeros Pasos</h1>
    <h2>Código HTML</h2>
    <h2><?php echo "Código PHP"; ?></h2>
    <h2><?php print("Otro código PHP"); ?></h2>
    <h2><?="Atajo para imprimir código PHP"; ?></h2>

    <?php
        # Comentario

        //Otro comentario

        /*
            Comentario
            Multilinea
        */

        echo "<!-- Esto es un comentario en HTML-->";

        # Variables
        $variable0 = "Mundo";
        $variable1 = "Hola $variable0";
        $variable2 = 2023;
        $variable3 = 1.1;
        $variable4 = true;

        # Concatenar
        echo $variable1." ".$variable2." version ".$variable3." True o false?:".$variable4;

        #Constantes
        define("constante1", "Esto es una constante");

        echo " Valor de la constante1: ".constante1;

        #Operadores
        $a = 15;
        $b = 5;
    ?>
    <h2>Operaciones con <?= $a." y ".$b;?>:</h2>
    <ul>
        <li><?= "Suma ".($a+$b);?></li>
        <li><?= "Resta ".($a-$b);?></li>
        <li><?= "Multiplicacion ".($a*$b);?></li>
        <li><?= "Division ".($a/$b);?></li>
        <li><?= "Resto ".($a%$b);?></li>
    </ul>
    <?php
        $a++;
        echo "Incremento: ".$a;
        $b--;
        echo ". Decremento: ".$b;
        $a+=4;
        echo ". Sumar y asignar: ".$a;
    ?>
    <h2>Comparadores con <?= $a." y ".$b;?>:</h2>
    <ul>
        <li><?= "Igualdad: ".($a === $b);?></li>
        <li><?= "Desigualdad: ".($a !== $b);?></li>
        <li><?= "Mayor o igual que: ".($a >= $b);?></li>
        <li><?= "Menor o igual que: ".($a <= $b);?></li>
    </ul>
    <?php
        $bool1 = true;
        $bool2 = false;
    ?>
    <h2>Operadores lógicos con <?= $bool1." y ".$bool2;?>:</h2>
    <ul>
        <li><?= "AND: ".($bool1 && $bool2);?></li>
        <li><?= "OR: ".($bool1 || $bool2);?></li>
        <li><?= "NOT: ".(!$bool2);?></li>
    </ul>
    <hr />
    <h2>Formulario GET</h2>
    <form action="./joaquin.php" method="GET">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre"/>
        <input type="text" id="edad" name="edad" placeholder="Edad"/>
        <input type="submit" value="Enviar" />
    </form>

    <h2>Formulario POST</h2>
    <form action="#resultadoForm" method="POST">
        <input type="text" id="apellido" name="apellido" placeholder="Apellido"/>
        <input type="submit" value="Enviar" />
    </form>

    <div id="resultadoForm">

        <?php
            # Variables de servidor

            #GET
            $nombre = $_GET["nombre"];
            echo " Tu nombre es ".$nombre;

            #POST
            $apellido = $_POST["apellido"];
            echo ". Tu apellido es ".$apellido;

            #Condicionales
            if (isset($_GET["edad"])) {
                $edad = (int) $_GET["edad"];
            } else {
                $edad = 0;
            }
        ?>

        <hr />
        <?php var_dump($_GET); ?>
        <hr />
        <?php var_dump($_POST); ?>
        <hr />

        <h2><?php
            if ($edad >= 18) {
                echo "Acceso permitido.";
            } elseif ($edad == 18) {
                echo "Acceso permitido por lo justo.";
            } else {
                echo "Acceso denegado.";
            }
        ?></h2>

        <!-- Otra forma:-->
        <?php if ($edad > 18): ?>
            <h2>Acceso permitido.</h2>
        <?php elseif ($edad == 18): ?>
            <h2>Acceso permitido por lo justo.</h2>
        <?php else: ?>
            <h2>Acceso denegado.</h2>
        <?php endif; ?>

    </div>

    <h2>Elige tu clase:</h2>
    <form action="#eleccion" method="GET">
        <input type="radio" name="option" id="elfo" value="elfo" />
        <label for="option1">elfo</label>
        <input type="radio" name="option" id="mago" value="mago" />
        <label for="option2">mago</label>
        <input type="submit" value="Enviar" />
    </form>

    <div id="eleccion">
        <?php
            $option = $_GET["option"];
            switch ($option) {
                case "elfo": echo "Has elegido elfo.";
                            break;
                case "mago": echo "Has elegido mago.";
                            break;
                default: echo "No has elegido nada.";
                        break;
            }
        ?>
    </div>

    <!-- Otra forma:-->
    <?php switch ($_GET["option"]):
        case "elfo": ?>
        <h2>Has elegido elfo.</h2>
    <?php break; case "mago": ?>
        <h2>Has elegido mago.</h2>
    <?php break; default: ?>
        <h2>No has elegido nada.</h2>
    <?php break; endswitch; ?>

    <h4><?= "Voy a saltarme 4 instrucciones echo";?></h4>

    <?php
        goto etiqueta;

        echo "Echo 1";
        echo "Echo 2";
        echo "Echo 3";
        echo "Echo 4";

        etiqueta:
        echo "Echo 5";
    ?>
    <hr />
    <?php
        $numero = 0;
        while ($numero <= 10) {
            echo $numero." ";
            $numero++;
        }

        $numero = 0;
    ?>

    <?php while ($numero <= 10):?>
        <h4><?= $numero; ?></h4>
    <?php $numero++; endwhile; ?>

    <?php
        $numero = 0;
        do {
            echo $numero." ";
            $numero++;
        } while ($numero <= 10);

        $numero = 0;
    ?>

    <!-- No hay version alternativa del do-while  -->
    <br />

    <?php
        for ($i = 0; $i <=10; $i++) {
            echo $i." ";
        }
    ?>

    <?php for($i = 0; $i <=10; $i++):?>
        <h4><?= $i; ?></h4>
    <?php endfor ?>

    <hr />

</body>
</html>