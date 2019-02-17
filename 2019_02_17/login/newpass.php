<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>Jelszó megváltoztatása</h2>
	<form action="newpass-validate.php" method="POST">
		<label>Felhasználónév: <input type="text" name="uname"/></label><br/><br/>
		<label>Régi-Jelszó: <input type="password" name="oldpsw"/></label><br/><br/>		
		<label>Új-Jelszó: <input type="password" name="psw"/></label><br/><br/>
		<label>Új-Jelszó újra: <input type="password" name="psw2"/></label><br/><br/>
		<input type="submit" value="Megváltoztatom"/>
	</form>
</body>
</html>