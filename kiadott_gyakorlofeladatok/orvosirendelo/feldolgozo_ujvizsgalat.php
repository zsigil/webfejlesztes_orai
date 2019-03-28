<?php
include("dbconnect.php");

$datum = $_POST['datum'];
$taj = $_POST['taj'];
$bkod = $_POST['bkod'];

$datum = $conn->real_escape_string($datum);
$taj = $conn->real_escape_string($taj);
$bkod = $conn->real_escape_string($bkod);

echo $datum;
echo $taj;
echo $bkod;

if(is_numeric($taj)){
    $querystart = sprintf("SELECT * from beteg where taj='%s'", $taj);
    $resultstart = $conn-> query($querystart);
    if($resultstart->num_rows>0){
            
    $query = sprintf("insert into vizsgalat(vizsgalat_datum, vizsgalat_beteg, vizsgalat_betegseg) VALUES
('%s', '%s', %d);", $datum, $taj, $bkod);
    $result = $conn-> query($query);
    if($result===true){
        echo "sikeres beszúrás";
        echo ' <a href="index.php" class="btn btn-primary">Vissza a főoldalra</a>';
    }else{
        echo "rosszul megadott adatok";
    }
    
    }else{
        header("Location:ujbeteg.php");
    }
    

    
}else{
    echo "a taj számokból áll";
}

$conn->close();
?>