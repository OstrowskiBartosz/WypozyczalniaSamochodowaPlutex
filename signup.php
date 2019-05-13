<?php
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Sign up to Plutex!</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="nav-link main-name" href="index.php">Wypożyczalnia Plutex</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rezerwuj</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="signup.php">Rejestracja</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="space">
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6 top-box">
                    <span style="font-size: 35px;">Rejestracja</span>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-2 box">
                    <div class="line"></div>
                </div>
                <div class="col-sm-4 box">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6 bottom-box">
                    <div>
                        <div>
                            <form>
                                <div class="form-group">
                                    <label for="firstNane" class="col-form-label">Login:</label>
                                    <input type="text" class="form-control" id="firstNane" placeholder="Wprowadz swój login">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Hasło:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Wprowadź tajne hasło">
                                </div>
                                <div class="form-group">
                                    <label for="emailAdress" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" id="emailAdress" placeholder="Podaj adres email">
                                </div>
                                <div class="form-group">
                                    <label for="firstName" class="col-form-label">Imie:</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Podaj swoje imie">
                                </div>
                                <div class="form-group">
                                    <label for="secondName" class="col-form-label">Nazwisko:</label>
                                    <input type="text" class="form-control" id="secondName" placeholder="Podaj swoje nazwisko">
                                </div>
                                
                                <input type="submit" class="btn btn-primary" value="Zarejestruj">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>

        </div>  
    </body>
</html>