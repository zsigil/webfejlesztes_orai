<?php

$uname = trim($_POST['uname']);
$psw = $_POST['psw'];
$psw2 = $_POST['psw2'];

if( strlen($uname)<4 ){
	echo "<h2> Túl rövid a felhasználónév </h2>";
}
else{
	include("dbconnect.php");	
	/*Van-e már ilyen felhasználó?*/
	$uname = $conn->real_escape_string($uname);
	$query = "SELECT username
			  FROM users
			  WHERE username LIKE '".$uname."'";
	$result = $conn->query($query);
	
	if($result->num_rows <1)
	{//Ha még nincs ilyen felhasználó regisztrálva
		$psw = $conn->real_escape_string($psw);
		$psw2 = $conn->real_escape_string($psw2);
		
		if(strcmp($psw, $psw2)==0 ){
			/*Titkosítjuk a jelszót!!*/
			$psw = sha1($psw);
			$query2 = "INSERT INTO users
					   VALUES('".$uname."', '".$psw."')";
			$result2 = $conn->query($query2);
			if($result2===true)
				echo "<h1>Sikeres regisztráció!</h1>";
			else
				echo "<h2>Nem sikerült a regisztráció!</h2>";
		}
	}
	else{
		echo "<h2>Van már ilyen nevű felhasználót</h2>";
		echo "<h4>Válassz másik felhasználónevet!</h4>";
	}			  
	
	$conn->close();
}

?>





