<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tagdij";

/*Adatbázishoz csatlakozás*/
$conn = new mysqli($servername, $username, $password, $dbname);

/*Ellenőrizzük, hogy létrejött-e a kapcsolat*/
if($conn->connect_error)
	die("Hiba az adatbázishoz csatlakozásban: ".$conn->connect_error);
else
{
	echo "Sikeres csatlakozás!";
	$conn->set_charset("utf8");
}

?>