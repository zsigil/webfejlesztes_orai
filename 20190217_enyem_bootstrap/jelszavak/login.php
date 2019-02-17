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
	<h2 class="py-5" >BEJELENTKEZÉS<h2>
	
	<div class="form-group container">
	<form method='POST' action="login-validate.php">
		<label for="uname">Felhasználónév</label>
		<input class="form-control" type="text" name="uname" />
		
		<label for="psw">Jelszó</label>
		<input class="form-control" type="password" name="psw" />
		
		<input class="btn btn-primary" type="submit" value="Belépek!" />
		
	</form>
	</div>
	</div>
  </body>
</html>