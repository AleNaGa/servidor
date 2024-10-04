<?php

function connection(){
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";

    $bd = "registro";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>