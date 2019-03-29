<?php

//csatlakozunk az adatbázishoz
include("dbconnect.php");

$uname = trim($_POST['uname']);
$passregi = $_POST['pswregi'];
$pass = $_POST['psw'];
$pass2 = $_POST['psw2'];

$passregi = sha1($passregi);
$uname = $conn->real_escape_string($uname);

$pass = $conn->real_escape_string($pass);
$pass2 = $conn->real_escape_string($pass2);


$query = "SELECT username FROM users WHERE username='".$uname."' AND password LIKE '".$passregi."'";
$result = $conn->query($query);

if($result->num_rows >0){
	if(strcmp($pass,$pass2)==0){
		$pass = sha1($pass);
		$query2 = "UPDATE users SET password='".$pass."' WHERE username='".$uname."'";
		$result2 = $conn->query($query2);
		
		if($result2===true){
			echo " a jelszóváltoztatás sikeres!";
		}
		else{
			echo "nem sikerült a jelszóváltoztatás";
		}
	}else{
		echo "a 2 jelszó nem egyforma";
	}
}
else{
	echo "rossz felhasználónév vagy jelszó";
}

$conn->close();

?>