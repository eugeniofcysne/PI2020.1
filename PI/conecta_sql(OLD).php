<?php
$dsn = "mysql:dbname=ofuscadbaen;host=localhost";
$usr = "root";
$senha = "";
try{
	$dbh = new PDO($dsn , $usr , $senha);
	$dbh -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$dbh -> exec ('set names utf8');
} catch(PDOException $e){
	echo 'ERROR: ' . $e -> getMessage();
}