<?php
include("dbconnect.php");

$uname = trim($_POST['uname']);
$psw = $_POST['psw'];

$uname = $conn->real_escape_string($uname);
$psw = $conn->real_escape_string($psw);
$psw = sha1($psw);

$query = "SELECT username
		  FROM users
		  WHERE username LIKE '".$uname."' AND password LIKE '".$psw."'";
		  
$result = $conn->query($query);
if($result->num_rows <1)
	echo "<h2>Rossz felhasználónév vagy jelszó</h2>";
else
	echo "<h2>Üdv az oldalon ".$uname."! </h2>";


$conn->close();
?>



