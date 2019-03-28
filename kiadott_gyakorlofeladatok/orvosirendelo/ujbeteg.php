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
            <h1>Új beteg felvitele</h1>
 
                    <form action="feldolgozo_ujbeteg.php" method="POST">
                      <div class="form-group">
                        <label for="taj">Taj</label>
                        <input required type="text" maxlength="9" class="form-control" id="taj" name="taj">
                        
                      </div>
                      <div class="form-group">
                        <label for="vnev">Vezetéknév</label>
                        <input required type="text" class="form-control" id="vnev" name="vnev">
                        
                      </div>
                      <div class="form-group">
                        <label for="knev">Keresztnév</label>
                        <input required type="text" class="form-control" id="knev" name="knev">
                        
                      </div>
                      
                       <div class="form-group">
                        <label for="szulido">Születési idő</label>
                        <input required type="date" class="form-control" id="szulido" name="szulido">
                        
                      </div>
                      
                        <div class="form-group">
                        <label for="szulhely">Születési hely</label>
                        <input required type="text" class="form-control" id="szulhely" name="szulhely">
                        
                      </div>
                      <button type="submit" class="btn btn-warning">Beteg rögzítése</button>
                    </form>
        </div>
    </div>
    
    <div class="row gombok">
        <div class="col-12">
            <a href="index.php" class="btn btn-primary">Vissza a főoldalra</a>
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