<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "mydb";

//criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

