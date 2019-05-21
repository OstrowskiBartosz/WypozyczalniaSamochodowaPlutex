
<?php

$user = 'root';
$pass = '';
$db = 'wypozyczalnia';

$db = new mysqli('localhost', $user, $pass, $db) or die("Nie udalo sie polaczyc z baza");

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="panel.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Sign up to Plutex!</title>
    </head>
	
	<style>
	</style>
	
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
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
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link active" href="panel.php">Dashboard</a>
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
                        <a class="nav-link" href="signup.php">Rejestracja</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="parallax1">	
        <div class="parallaxtext">
            <div class="centered-big-text">
                Dodawanie uzytkownikow
            </div>
			<div class="info-form1">

			<h1>Dodaj Uzytkownika</h1>
			<div class="txtb">
				<label>Imię :</label>
				<input type="text" name="" value="" placeholder="Wpisz imię">
			</div>
			
			<div class="txtb">
				<label>Naziwsko :</label>
				<input type="text" name="" value="" placeholder="Wpisz nazwisko">
			</div>
			
			<div class="txtb">
				<label>Email :</label>
				<input type="text" name="" value="" placeholder="Wpisz email">
			</div>
			
			<div class="txtb">
				<label>Login :</label>
				<input type="text" name="" value="" placeholder="Wpisz login">
			</div>
			
			<div class="txtb">
				<label>Haslo :</label>
				<input type="text" name="" value="" placeholder="Wpisz haslo">
			</div>
			
			<a class="btn2">Zapisz</a>
			
			</div>
		
			<div class="info-form2">

			<h1>Dodaj Administratora</h1>
			<div class="txtb">
				<label>Imię :</label>
				<input type="text" name="" value="" placeholder="Wpisz imię">
			</div>
			
			<div class="txtb">
				<label>Naziwsko :</label>
				<input type="text" name="" value="" placeholder="Wpisz nazwisko">
			</div>
			
			<div class="txtb">
				<label>Email :</label>
				<input type="text" name="" value="" placeholder="Wpisz email">
			</div>
			
			<div class="txtb">
				<label>Login :</label>
				<input type="text" name="" value="" placeholder="Wpisz login">
			</div>
			
			<div class="txtb">
				<label>Haslo :</label>
				<input type="text" name="" value="" placeholder="Wpisz haslo">
			</div>
			
			<a class="btn2">Zapisz</a>
			</div>			
			</div>			
		</div>
		
		<div class="parallax2">	
		    <div class="parallaxtext">
			<div class="centered-big-text">
                Dodawanie samochodow
            </div>
			</div>
		</div>
		
    </body>
</html>