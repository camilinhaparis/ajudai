<?php
//arquivo conexão com o banco

$host = "127.0.0.1:3307"; //phpmyadmin
$user = "root";
$pass = "";
$banco = "db_site"; 



$link = mysqli_connect($host, $user, $pass, $banco);

?>