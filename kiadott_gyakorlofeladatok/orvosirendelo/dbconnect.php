<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orvosirendelo";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("sikertelen kapcsolódás");
}else{
    $conn->set_charset("utf8");
}

?>