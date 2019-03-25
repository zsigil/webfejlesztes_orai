<?php

include('dbconnect.php');
$nev = $_POST["nev"];
$cim = $_POST["cim"];
$darab = $_POST["darab"];

$nev = $conn->real_escape_string($nev);
$cim = $conn->real_escape_string($cim);
$darab = $conn->real_escape_string($darab);

$elsoquery = sprintf("SELECT id from konyv where cim='%s'", $cim);
$elsoresult = $conn->query($elsoquery);
$lekerdezettID = -1;

 if($elsoresult->num_rows>0){
     while($row=$elsoresult->fetch_assoc()){
         $lekerdezettID = intval($row["id"]);
     }
 }else{
     echo "nincs ilyen könyv!";
 }

 if($lekerdezettID>0){
     $query = sprintf("INSERT INTO rendeles (konyvId, darab, vevo)
VALUES (%d, %d, '%s');", $lekerdezettID, $darab, $nev);

$result = $conn->query($query);
$conn->close();
header("Location: index.php");

 }else{
     
 }



$conn->close();
?>