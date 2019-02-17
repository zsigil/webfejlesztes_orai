<?php

$user = trim($_POST['uname']);
$pass = $_POST['psw'];
$pass2 = $_POST['psw2'];

if(strlen($user)<4){
	echo "<h2> Túl rövid a felhasználónév</h2>";
}
else {
//csatlakozunk az adatbázishoz
include("dbconnect.php");

$user = $conn->real_escape_string($user);
$query = "SELECT username FROM users WHERE username='".$user."'";

$result = $conn->query($query);

if($result->num_rows <1){
	$pass = $conn->real_escape_string($pass);
	$pass2 = $conn->real_escape_string($pass2);
	
	if(strcmp($pass,$pass2)==0){
		$pass = sha1($pass);
		$query2 = "INSERT INTO users VALUES ('".$user."', '".$pass."')";
		$result2 = $conn->query($query2);
		
		if($result2==true){
			echo "sikeres regisztráció";
		}
		else{
			echo "upsz";
		}
	}
	else{
		echo "nem stimmel a 2 jelszó";
	}
}
else{
	echo "van már ilyen nevű felhasználó";
}


$conn->close();
}
?>