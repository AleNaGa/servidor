<?php
    require_once("connection/connection.php");
    #Una sesion es el periodo de tiempo durante el cual el usuario ve un numero de paginas determinado
    #del mismo dominio sin necesidad de identificarse cada vez que se recarga la pagina (almacenar y persistir)
    session_start();
    $_SESSION["variable_persistente"] = "Ejemplo de variable de session";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<!-- Para cambiar de modo oscuro "dark" a modo normal, simplemente cambiarlo por "light"-->

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es mi portfolio personal">
    <meta name="keywords" content="html, css, sass, bootstrap, js, portfolio, proyectos">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- My scripts -->
    <script type="text/javascript" src="js/app.js" defer></script>

    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Tu nombre's portfolio</title>

</head>

<body>
    <div id="contact" class="container">
        <?php if(isset($_SESSION["errores"])){
            var_dump($_SESSION["errores"]);
        }
        
        ?>

        <?php if(isset($_SESSION["completado"])){
            echo "Registro completado";
        }
        
        ?>
        <form action="registro/registro.php" method="POST" class="mt-2 mx-auto">
            <fieldset class="form-row reset p-4 align-items-center border border-primary ">
                <legend class="reset text-light border border-primary px-2 py-1">Registrate</legend>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="username" class="col-sm-2 col-form-label text-primary">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" id="username" class="form-control text-info" name="username" required />
                    </div>
                </div>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="mail" class="col-sm-2 col-form-label text-primary">mail:</label>
                    <div class="col input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                          </div>
                        <input type="email" id="mail" class="form-control text-info" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                    </div>
                </div>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="password" class="col-sm-2 col-form-label text-primary">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" class="form-control text-info" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Debe contener al menos un número y una mayúscula y una minúscula, y al menos 8 o más carácteres"/>
                    </div>
                </div>

                <div class="row g-3 mt-2 w-25 mx-auto">
                    <input id="sendBttn" class="btn btn-primary btn-lg" type="submit" value="Send" name="submit"/>
                </div>
            </fieldset>
        </form>
    </div>

    <?php 
        if(isset($_SESSION["errores"])){
            $_SESSION["errores"] = null;
            session_unset($_SESSION["errores"]);
        }
    ?>

    <!------------------------------------------ LOGIN ------------------------------------------>

    <div id="login" class="container"> 
    <?php if(isset($_SESSION["error_login"])){
            var_dump($_SESSION["error_login"]);
        }
        
        ?>
        <form action="login/login.php" method="POST" class="mt-2 mx-auto">
            <fieldset class="form-row reset p-4 align-items-center border border-primary ">
                <legend class="reset text-light border border-primary px-2 py-1">Login</legend>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="email" class="col-sm-2 col-form-label text-primary">email:</label>
                    <div class="col input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                          </div>
                        <input type="email" id="email" class="form-control text-info" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                    </div>
                </div>

                <div class="form-group row g-3 mt-1 mx-auto">
                    <label for="pass" class="col-sm-2 col-form-label text-primary">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="pass" class="form-control text-info" name="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Debe contener al menos un número y una mayúscula y una minúscula, y al menos 8 o más carácteres"/>
                    </div>
                </div>

                <div class="row g-3 mt-2 w-25 mx-auto">
                    <input id="sendBttn2" class="btn btn-primary btn-lg" type="submit" value="Send" name="submit"/>
                </div>
            </fieldset>
        </form>
    </div>
    <?php 
        if(isset($_SESSION["error_login"])){
            $_SESSION["error_login"] = null;
            session_unset($_SESSION["error_login"]);
        }
    ?>
</body>

</html>