<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="multiplicacion.php" method="GET">
        <input type="text" id= "edad" name="edad" placeholder="tu edad" >
</form>
<?php if(isset($_GET["edad"])):?>
    <?php if($edad > 18):?>
        <p>Acceso permitido</p>
    <?php elseif($edad== 18): ?>
        <p>Acceso justo</p>
    <?php else: ?>
        <p>Acceso denegado</p>
    <?php endif; ?>  
<?php endif; ?>
<?php while($edad <=18): ?>
    <p>Acceso denegado</p>  
    <?php $edad++; ?>
<?php endwhile; ?>

</body>
</html>