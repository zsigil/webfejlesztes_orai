

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="mystyle.css">
	<title>Gólyaállomány</title>
	<script src="scripts.js"></script>
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
					<div class="col-12 col-md-8 text-center" id="listazas">
						<h1>Új gólya rögzítése</h1>
						<p>A fenti menü segítségével navigálhatsz</p>
					</div>
					
							
			</div>
			
			<div class="row justify-content-center">
				<div class="col-12 col-md-8 text-center">
					<form name="form1" method="POST" action="register.php" onsubmit="return Validate()">
						  <div class="form-group">
							<label for="kereses">Gólya neve</label>
							<span class="piros" id="err"></span>
							<input type="text" class="form-control" name="nev" onblur="validNev();" id="kereses" placeholder="Gólya neve" />
							
						  </div>
						  
						  <div class="form-group">
							<label for="helyseg">Helység</label>
							<input type="text" class="form-control" name="helyseg" id="helyseg" placeholder="Helység" />
							
						  </div>
						  
						<div class="form-group">
							<label for="gondozo">Gondozó</label>
							<input type="text" class="form-control" name="gondozo" id="gondozo" placeholder="Gondozó" />
							
						  </div>
						  <button type="submit" class="btn btn-info">Gólya felvétele az adatbázisba</button>
					</form>

				</div>
				
						
		</div>
					
							
			</div>
		
		</div>
	</body>


</html>