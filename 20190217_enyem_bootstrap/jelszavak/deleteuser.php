<?php
include("dbconnect.php");

$uname = $_POST['uname'];
$query = "DELETE from users WHERE username='".$uname."'";

$result = $conn->query($query);


$conn->close();
header("Location: list.php");
?>