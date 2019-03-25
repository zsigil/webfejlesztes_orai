<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tankonyvrendelo";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
	die("Hiba az adatbázishoz csatlakozásban: ".$conn->connect_error);
else
{
	echo "Sikeres csatlakozás!";
	$conn->set_charset("utf8");
}
?>