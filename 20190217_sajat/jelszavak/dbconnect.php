<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("hiba a csatlakozás közben");
}
else{
	$conn->set_charset("utf8");
}




?>