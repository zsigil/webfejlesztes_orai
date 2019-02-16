<?php
include("functions.php");
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>Ügyfelek nevei:</h2>
	<?php echo Ugyfelek($conn);?>
	<h2>Új ügyfél felvétele</h2>
	<form action="newuser.php" method="POST">
		<label>Név: <input type="text" name="nev" placeholder="Minta Béla"/></label><br/><br/>
		<label>Születési év:<input type="number" name="szulido"/></label><br/><br/>
		<label>Irányítószám<input type="number" name="irszam"/></label><br/><br/>
		Ország:<br/>
		<input type="radio" name="orszag" value="H">Magyarország<br/>
		<input type="radio" name="orszag" value="A">Ausztria<br/>
		<input type="radio" name="orszag" value="RO">Románia<br/>
		<input type="radio" name="orszag" value="HR">Horvátország<br/>
		<input type="submit" value="Ügyfél felvétele"/>
	</form>
	
	<h2>Keresés ország szerint</h2>
	<form action="search.php" method="POST">
	<label>Országjel: <input type="text" name="orsz"/></label>
	<input type="submit" value="Keresés"/>
	</form>
</body>
</html>
<?php
	/*Adatbázis-kapcsolat lezárása*/
	$conn->close();
?>






