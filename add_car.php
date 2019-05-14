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
                        <a class="nav-link active" href="add_car.php">DODAJ/ZMODYFIKUJ/USUŃ samochody</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Rejestracja</a>
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
                    <span style="font-size: 35px;">Dodaj nowy samochód</span>
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
                                    <label for="firstNane" class="col-form-label">Marka samochodu:</label>
                                    <input type="text" class="form-control" id="firstNane" placeholder="Marka samochodu">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Rodzaj:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Rodzaj samochodu">
                                </div>
                                <div class="form-group">
                                    <label for="emailAdress" class="col-form-label">liczba miejsc:</label>
                                    <input type="text" class="form-control" id="emailAdress" placeholder="liczba miejsc w samochodzie">
                                </div>
                                <div class="form-group">
                                    <label for="secondName" class="col-form-label">Opis samochodu:</label>
                                    <textarea rows="4" cols="50" class="form-control" placeholder="Opis samochodu"></textarea>
                                </div>
                                
                                <input type="submit" class="btn btn-primary" value="Dodaj">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            
            <div class="row" style="padding-top:20px; text-align: center;">
                <div class="col-sm-12 top-box">
                    <span style="font-size: 35px;">Lista aktualnych samochodów</span>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="images/polestar2-655.jpg" height="250" width="350" alt="car">
                        </div>
                        <div class="col-sm-4">
                            <img src="images/audi-q5.jpg" height="250" width="350" alt="car">
                        </div>
                        <div class="col-sm-4">
                            <img src="images/1200px-2011_Hyundai_Elantra_GLS_--_06-02-2011_1.jpg" height="250" width="350" alt="car">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row box">
                        <div class="col-sm-4">
                            Marka: BMW
                        </div>
                        <div class="col-sm-4">
                            Marka: Audi Q7
                        </div>
                        <div class="col-sm-4">
                            Marka: Hyundai i30
                        </div>
            </div>
            <div class="row box">
                        <div class="col-sm-4">
                            Typ: Samochód osobowy, SUV
                        </div>
                        <div class="col-sm-4">
                            Typ: Samochód osobowy, SUV
                        </div>
                        <div class="col-sm-4">
                            Typ: Samochód osobowy, Liftback
                        </div>
            </div>
            <div class="row box">
                        <div class="col-sm-4">
                            Liczba miejsc i drzwi: 5 miejsc, 5 drzwi
                        </div>
                        <div class="col-sm-4">
                            Liczba miejsc i drzwi: 5 miejsc, 5 drzwi
                        </div>
                        <div class="col-sm-4">
                            Liczba miejsc i drzwi: 5 miejsc, 5 drzwi
                        </div>
            </div>
            <div class="row bottom-box" style="padding-top: 15px; margin-bottom: 200px;">
                <div class="col-sm-4">
                            Ma nowy silnik o mocy 500 koni mechanicznych. Posiada klimatyzację, elektrycznie otwierane szyby, wspomaganą kierownice i elektrycznie regulowane reflektory i lusterka.
                </div>
                <div class="col-sm-4">
                            Ma nowy silnik o mocy 500 koni mechanicznych. Posiada klimatyzację, elektrycznie otwierane szyby, wspomaganą kierownice i elektrycznie regulowane reflektory i lusterka.
                </div>
                <div class="col-sm-4">
                            Ma nowy silnik o mocy 500 koni mechanicznych. Posiada klimatyzację, elektrycznie otwierane szyby, wspomaganą kierownice i elektrycznie regulowane reflektory i lusterka.
                </div>
            </div>
        </div>  
    </body>
</html>

 