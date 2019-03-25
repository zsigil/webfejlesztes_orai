<?php

include("dbconnect.php");

$azon = $_POST['azon'];
$azon = $conn->real_escape_string($azon);

$query = sprintf("DELETE from rendeles where id like %d", $azon);

$result = $conn->query($query);

if($result===true){
    echo "sikeres törlés";
}else{
    echo "törlés nem sikerült";
}

$conn->close();
?>

<!doctype html>
<html lang="hu">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Állami tankönyvrendelő</title>
  </head>
  <body>
  <div class="container my-3">
      <h1 class="text-center">Üdvözöllek a Tankönyvrendelő alkalmazásomban!</h1>
      <div class="row justify-content-center my-5">
          <div class="col text-center">
          <a href="rendeles.php" class="btn btn-primary">Rendelek!</a>
          <a href="listazo.php" class="btn btn-warning">Listázok!</a>
          
          </div>
      </div>
  </div>
  