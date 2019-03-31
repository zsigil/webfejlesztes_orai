<?php
include("dbconnect.php");
	$nev= $_POST['nev'];
	$gondozo= $_POST['gondozo'];
	$helyseg= $_POST['helyseg'];
	$sql = sprintf("INSERT INTO nyilvantartas(nev, gondozo,helyseg) values ('%s', '%s', '%s');",$nev, $gondozo, $helyseg );
	$result = $conn->query($sql);
	
	$output = "";
	
	if($result==true){
		echo 'hurrá<br/>';
		echo "<a class='btn btn-primary ml-5' href='listazo.php'>gólyák listázása</a>";
	}else{
		echo 'nem sikerült';
	}
	
$conn->close();
?>