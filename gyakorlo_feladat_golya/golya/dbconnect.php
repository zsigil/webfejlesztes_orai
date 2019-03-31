<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "golya";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn-> set_charset("utf8");

if($conn->connect_error){
	die("sikertelen csatlakozás");
}else{
	echo "sikeres csatlakozás";
}
?>