<?php

include("dbconnect.php");

$azon = $_POST['azon'];
$query = "DELETE
		  FROM ugyfel
		  WHERE azon LIKE '".$azon."'";
		  
$result = $conn->query($query);
if($result === true){
	echo "<h2>Sikeres törlés</h2>";	
}
else{
	echo "<h2>Sikertelen törlés</h2>";
}

echo "<a href='index.php'>Vissza a nyitóoldalra</a>";

$conn->close();
?>







