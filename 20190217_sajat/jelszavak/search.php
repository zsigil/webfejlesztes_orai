<?php
include("dbconnect.php");

$nev = trim($_POST['nev']);
$nev = $conn->real_escape_string($nev);
$query = "SELECT username FROM users WHERE username LIKE '%".$nev."%'";

$result = $conn->query($query);
$output = "";

if ($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$output .= "<tr>";
		$output .= "<td>";
		$output .= $row['username'];
		$output .= "</td>";
		$output .= "</tr>";
	}
	
	
	
}else{
	echo "nincs a keresésnek megfelelő név az adatbázisban";
}





?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<div class="container py-5">
	<?php
		echo 'Keresés: "'. $nev.'"';
	?>
		<table class="table">
		<thead>
			<tr>
				<th>A keresésnek megfelelnek</th>
			</tr>
		</thead>
		<tbody>
		
		<?php
			echo $output; 
		
		?>
		</tbody>
		</table>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
<?php

$conn->close();
?>