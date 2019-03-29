<?php
include("dbconnect.php");
$order = "asc";

function Listing($conn, $order){
if(isset($_POST['abc'])){
	$order = $_POST['abc'];
}



$query = "SELECT username FROM users ORDER BY username ".$order;
$result = $conn->query($query);

$output = "";

if($result->num_rows > 0){	
	
	while($row = $result->fetch_assoc()){
		$output .= "<tr>";
		$output .= "<td>";
		$output .= $row['username'];
		$output .= "</td>";
		$output .= "<td><form action='deleteuser.php' method='POST'>";
		$output .= "<input type='hidden' name='uname' value='";
		$output .= $row['username'];
		$output .= "' />";
		$output .= "<input type='submit' value='Törlés' />";
		$output .= "</form></td>";
		$output .= "</tr>";
	}
}
return $output;
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

  </head>
  <body>
	<div class="container">
	<h2 class="py-5" >Felhasználók listázása<h2>
	

		<table class="table">
			<thead>
			<tr>
				
				<th>
				<form action="list.php" method='POST'>
				<input type="hidden" name="abc" value="asc" />
				<input type="submit" value="ABC növekvő" /> 
				
				</form>
				</th>
				
				<th>
				<form action="list.php" method='POST'>
				<input type="hidden" name="abc" value="desc" />
				<input type="submit" value="ABC csökkenő" /> 
				
				</form>
				</th>
			</tr>
			<tr>
				<th>Felhasználónév</th>
				<th>Törlés</th>
			</tr>
			</thead>
			<tbody>
			<?php
				echo Listing($conn, $order);
			?>
			</tbody>
			
			
		</table>
		
		
	</div>
  </body>
</html>

<?php

$conn->close();
?>