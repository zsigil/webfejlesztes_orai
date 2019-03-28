<?php
include("dbconnect.php");

$taj = $_POST['taj'];
$knev = $_POST['knev'];
$vnev = $_POST['vnev'];
$szulido = $_POST['szulido'];
$szulhely = $_POST['szulhely'];


$taj = $conn->real_escape_string($taj);
$knev = $conn->real_escape_string($knev);
$vnev = $conn->real_escape_string($vnev);
$szulido= $conn->real_escape_string($szulido);
$szulhely = $conn->real_escape_string($szulhely);

echo $taj;

if(is_numeric($taj)){
    $querystart = sprintf("SELECT * from beteg where taj='%s'", $taj);
    $resultstart = $conn-> query($querystart);
    if($resultstart->num_rows>0){
       header("Location:vizsgalat.php");
    
    }
    else{
     $query= sprintf("INSERT into beteg (taj,vnev,knev,szulido,szulhely)
VALUES ('%s', '%s', '%s', '%s', '%s');", $taj, $vnev, $knev, $szulido, $szulhely);
    $result = $conn-> query($query);
       if($result===true){
        echo "sikeres beszúrás";
        echo ' <a href="index.php" class="btn btn-primary">Vissza a főoldalra</a>';
    }
    else{
        echo "rosszul megadott adatok";
    }
    }    
    
}
else{
    echo "a taj számokból áll";
}

$conn->close();
?>