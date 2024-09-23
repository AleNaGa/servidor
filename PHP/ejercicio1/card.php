<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_POST["name"]) && isset($_POST["surname"])&& isset($_POST["age"])&& isset($_POST["weight"])&& isset($_POST["height"])):?>
    <h1>Hola <?php echo $_POST["name"]." ". $_POST["surname"]?></h1>
      <?php if($_POST["age"]<18):?>
        <p>Tienes <p style=color:red><?php echo $_POST["age"] ?></p> años</p>
      <?php else:?>
        <p> Tienes <p style=color:green><?php echo $_POST["age"] ?></p> años</p>
    <?php endif ?>
    <p>Tu peso es: <?php echo $_POST["weight"]?></p>
    <h3>Tu altura es: <?php echo $_POST["height"]?></h3>
    <?php if(isset($_POST["asignaturas"])):?>
      <p>Asignaturas matriculadas: <?php echo $_POST["asignaturas"]?></p>
    <?php else:?>
      <p>No has matriculado ninguna asignatura</p>
    <?php endif ?>
<?php endif ?>
</body>
</html>