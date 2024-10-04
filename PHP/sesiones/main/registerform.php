<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../scripts/registro.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="technologies">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <input type="submit" class="m-3 btn btn-primary" value="submit">
</form>
</body>
</html>