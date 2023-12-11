<?php
//arquivo conexão com o banco

/*$host = "localhost:3307"; 
$user = "root";
$pass = "";
$banco = "db_site"; */

$host = "us-cdbr-east-06.cleardb.net "; 
$user = "b133bde94aebc3";
$pass = "f79589dd";
$banco = "heroku_f1abf8f2fb9364e"; 


$link = mysqli_connect($host, $user, $pass, $banco);

?>