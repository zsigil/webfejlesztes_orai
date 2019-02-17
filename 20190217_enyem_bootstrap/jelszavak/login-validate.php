<?php

//csatlakozunk az adatbázishoz
include("dbconnect.php");

$user = trim($_POST['uname']);
$pass = $_POST['psw'];

$pass = sha1($pass);
$user = $conn->real_escape_string($user);

$query = "SELECT username FROM users WHERE username='".$user."' AND password LIKE '".$pass."'";
$result = $conn->query($query);

if($result->num_rows >0){
	echo "sikeres bejelentkezés," . $user;
}
else{
	echo "rossz felhasználónév vagy jelszó";
}

$conn->close();

?>