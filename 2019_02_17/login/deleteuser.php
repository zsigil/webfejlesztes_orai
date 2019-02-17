<?php
include("dbconnect.php");

$uname = $_POST['uname'];

$query = "DELETE
		  FROM users
		  WHERE username LIKE '".$uname."'";
		  
$result = $conn->query($query);

$conn->close();
header("Location: list.php");
?>






