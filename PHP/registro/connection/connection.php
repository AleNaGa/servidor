<?php

$host = "localhost:3306";
$user = "root";
$pass = "root";

$bd = "users_crud_php";

$connect=mysqli_connect($host, $user, $pass);

mysqli_select_db($connect, $bd);

session_start();

?>