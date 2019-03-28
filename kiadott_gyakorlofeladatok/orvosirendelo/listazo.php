<?php
include("dbconnect.php");

$rendezes = "asc";

if(isset($_POST['asc'])){
$rendezes = $_POST['asc'];    
}

$query = sprintf("SELECT * from beteg order by vnev %s;", $rendezes);

$result = $conn->query($query);
$output = "";

if($result->num_rows > 0){
    $output .= "<table class='table table-striped'>";
            $output .= "<tr>";
        $output .= "<td>";
        $output .= "<form action='listazo.php' method='POST'>";
        $output .= "<input type='hidden' name='asc' value='asc'>";
        $output .= "<input type='submit' value='emelkedo'>";   
        $output .= "</form>";        
        $output .= "</td>";
        $output .= "<td>";
        $output .= "<form action='listazo.php' method='POST'>";
        $output .= "<input type='hidden' name='asc' value='desc'>";
        $output .= "<input type='submit' value='csökkenő'>";    
        $output .= "</form>";           
        $output .= "</td>";
        
        $output .= "</tr>";
        
    while($row = $result->fetch_assoc()){

        $output .= "<tr><td>";
        $output .= "<form action='adatok.php' method='POST'>";
        $output .= sprintf("<input type='hidden' name='bkod' value='%s'>",$row['taj']);
        $output .= sprintf("<input type='submit' value='%s %s'>",$row['vnev'], $row['knev']) ;   
        $output .= "</form>";        
        $output .= "</td>";
        $output .= "<td>";
        $output .= $row['taj'];
        $output .= "</td>";
        $output .= "</tr>";
    };
    $output .= "</table>";
}
?>

<!doctype html>
<html lang="hu">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gödöllő, 2.számú háziorvosi rendelő</title>
  </head>
  <body>
  <div class="container">
    <div class="row fejlec">
        <div class="col-12 text-center">
            <h1>2. számú rendelő</h1>
            <h3>Dr. Bubó Bubó</h3>
        </div>
    </div>
    
    <div class="row gombok">
        <div class="col-12 text-center">
            <a href="index.php" class="btn btn-primary">Vissza a főoldalra</a>
        </div>
    </div>
    
    <div class="row kijelzes my-5 justify-content-center">
    <div class="col-12">
            <?php
                echo $output;
            ?>
        </div>
    </div>
    
    
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$conn->close();

?>