<?php
if(isset($_POST["submit"])){
    require_once("../conection.php");
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $sql = "SELECT * FROM users WHERE name = '$username'";
    $res = mysqli_query($connect, $sql);

    if($res && mysqli_num_rows($res) ==1){
        $username = mysqli_fetch_assoc($res);
        if(password_verify($password, $username["password"])){
            session_start();
            $_SESSION["username"] = $username["name"];
            $_SESSION["id"]= $username["id"];
            header("Location: ../main/main.php");
        }else{
            header("Location: ../error/error.php");
        }
    }else{
        echo $username;
        header("Location: ../error/error.php");
    }
}
