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
    <a class="btn btn-primary mx-5" href="signin.php">Regisztráció</a>
	<a class="btn btn-primary mx-5" href="login.php">Bejelentkezés</a>
	<a class="btn btn-primary mx-5" href="list.php">Felhasználók listázása</a>
	<a class="btn btn-primary mx-5" href="newpass.php">Új jelszó</a>
	<a class="btn btn-primary mx-5" href="search.php">Keres</a>

	</div>
	
	<div class="container py-5">
	<h2 class="py-5" >Keresés<h2>
	
	<div class="form-group container">
		<form method='POST' action="search.php">
			
			<label for="nev">Keresendő név</label>
			<input class="form-control" type="text" name="nev" />
			
			<input class="btn btn-primary" type="submit" value="Keresem!" />
			
		</form>
	</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>