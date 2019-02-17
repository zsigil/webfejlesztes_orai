<?php
include("dbconnect.php");

$output = "";
$name = $_POST['name'];
$name = $conn->real_escape_string($name);

$query = "SELECT username
		  FROM users
		  WHERE username LIKE '%".$name."%'";

$result = $conn->query($query);
if($result->num_rows >0){
	while($row = $result->fetch_assoc()){
		$output .= $row['username']."<br/>";
	}
}
else{
	$output .= "<p>Nincs ilyen felhasználó az adatbázisban!</p>";
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		echo "<h2>A felhasználónevek, akik tartalmazzák ".$name." karaktersorozatot: </h2>";
		echo $output;
	?>
</body>
</html>
<?php
$conn->close();
?>



