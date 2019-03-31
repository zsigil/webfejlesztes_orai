<?php
include("dbconnect.php");

	
	$output = "";
	
	if(isset($_POST['kereses'])){
		$feltetel = $_POST['kereses'];							
		$sql = sprintf("SELECT nev, gondozo,helyseg from nyilvantartas where nev like '%%%s%%'", $feltetel) ;
		$result = $conn->query($sql);	
		
		if($result->num_rows>0){
				
				while($row = $result->fetch_assoc()){
					$output .= "<tr>";
					$output .= "<td>";
					$output .= $row['nev'];
					$output .= "</td>";
					$output .= "<td>";
					$output .= $row['helyseg'];
					$output .= "</td>";
					$output .= "<td>";
					$output .= $row['gondozo'];
					$output .= "</td>";
					$output .= "</tr>";
				}
		
		}		
	}
	
	
	//$sql = "SELECT nev, gondozo,helyseg from nyilvantartas where nev like '%" .$feltetel. "%';" ;
	

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="mystyle.css">
	<title>Gólyaállomány</title>
	</head>
	
	<body>
		<div class="container" id="keret">
		<nav>
			<div class="row justify-content-center">
			<div class="col-12 text-center">
				<a class="btn btn-primary" href="index.php">Kezdőoldal</a>
				<a class="btn btn-primary" href="listazo.php">Listázás</a>
				<a class="btn btn-primary" href="kereses.php">Keresés</a>
				<a class="btn btn-primary" href="ujgolya.php">Új gólya</a>
			</div>
			</div>
		</nav>
		<div class="row justify-content-center">
				<div class="col-12 col-md-8 text-center">
					<h1>Keresés</h1>
					<p>A fenti menü segítségével navigálhatsz</p>
				</div>
				
						
		</div>
		
		<div class="row justify-content-center">
				<div class="col-12 col-md-8 text-center">
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
						  <div class="form-group">
							<label for="kereses">Gólya neve</label>
							<input type="text" class="form-control" name="kereses" id="kereses" placeholder="Gólya neve" />
							
						  </div>
						  <button type="submit" class="btn btn-primary">Mutasd!</button>
					</form>

				</div>
				
						
		</div>
		
		<div class="row justify-content-center">
				<div class="col-12 col-md-8 text-center">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Gólya</th>
								<th>Helység</th>
								<th>Gondozó</th>
							</tr>
						<thead>
						<tbody>
							<?php
								
									echo $output;
								
								
							?>
						</tbody>
					</table>
				</div>
				
						
		</div>

		
		</div>
	</body>


</html>
<?php
$conn->close();
?>