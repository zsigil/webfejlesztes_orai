<?php

include("dbconnect.php");
include("functions.php");

$nev = trim($_POST['nev']);
$szulido = $_POST['szulido'];
$irszam = $_POST['irszam'];
$orszag = $_POST['orszag'];

//echo $nev . " - ".$szulido." - ".$irszam." - ".$orszag;

echo "<h4>".UjUgyfel($nev, $szulido, $irszam, $orszag, $conn)."</h4>";
echo  "<a href='index.php'>Vissza a nyitóoldalra</a>";

/*DB kapcsolat lezárása*/
$conn->close();
?>