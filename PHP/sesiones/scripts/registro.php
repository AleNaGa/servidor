<?php
//CONEXTION BBDD
    if(isset($_POST["submit"])){
        require_once("../conection.php");
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        if($username && $password && !empty($username) && !empty($password)){
            $pass = password_hash($password, PASSWORD_BCRYPT,["cost" => 4]);
            $sql = "INSERT INTO users(username, password) VALUES('$username', '$pass')";
            $guardar = mysqli_query($connect, $sql);
            if($guardar){
                header("Location: ../index.php");
            }else{
                header("Location: ../error/error.php");
            }
        }
    }
?>
