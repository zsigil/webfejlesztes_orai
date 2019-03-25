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
      <h1 class="text-center">Üdvözöllek a Rendelésben!</h1>
      <div class="row justify-content-center my-5">
          <div class="col text-center">
          <a href="listazo.php" class="btn btn-warning">Listázok!</a>
          <a href="index.php" class="btn btn-danger">Vissza a főoldalra</a>
          
          </div>
      </div>
      <form method="POST" action="megrendelem.php">
          <div class="form-group">
            <label for="nev">Rendelő neve</label>
            <input type="text" class="form-control" minlength="3" id="nev" name="nev" placeholder="Rendelo neve">
          </div>
          <div class="form-group">
            <label for="cim">Könyv címe</label>
            <input type="text" class="form-control" id="cim" name="cim" placeholder="Könyv címe">
          </div>
          <div class="form-group">
            <label for="darab">Darabszám</label>
            <input type="number" min="1" max="100" class="form-control" id="darab" name="darab" placeholder="darab">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Megrendelem!</button>
      </form>
  </div>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>