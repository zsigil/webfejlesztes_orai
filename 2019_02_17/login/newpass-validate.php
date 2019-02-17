<?php
include("dbconnect.php");

$uname = trim($_POST['uname']);
$oldpsw = $_POST['oldpsw'];
$psw = $_POST['psw'];
$psw2 = $_POST['psw2'];

$uname = $conn->real_escape_string($uname);
$oldpsw = $conn->real_escape_string($oldpsw);
$oldpsw = sha1($oldpsw);

$query = "SELECT username
		  FROM users
		  WHERE username LIKE '".$uname."' AND password LIKE '".$oldpsw."'";
		  
$result = $conn->query($query);
if($result->num_rows <1)
	echo "<h2>Rossz felhasználónév vagy jelszó</h2>";
else
{
	$psw = $conn->real_escape_string($psw);
	$psw2 = $conn->real_escape_string($psw2);
	if(strcmp($psw, $psw2)==0)
	{
		$psw = sha1($psw);
		$query = "UPDATE users
				  SET password ='".$psw."'
				  WHERE username LIKE '".$uname."'";
				  
		$result = $conn->query($query);
		if($result===true)
			echo "<h2>Sikeres jelszómódosítás</h2>";
		else
			echo "<h2>Nem sikerült a jelszómódosítás</h2>";
	}
	else{
		echo "<h2>A két új jelszó nem egyezik meg!</h2>";
	}
}


$conn->close();
?>