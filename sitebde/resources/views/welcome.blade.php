<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/navbar.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/default.css" media="all">
        <title>BDE Cesi Bordeaux</title>  

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img class="icon" src="images/template/logoInvert.png" alt="LOGO" title="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle button" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Evenements
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item " href="#">Evenements futurs</a>
                <a class="dropdown-item " href="#">Evenements passés</a>
                <a class="dropdown-item" href="#">Boite à idée</a>
                </div>
                </li>
                <li class="nav-item">
                <a href="#" class="button nav-link">Boutique</a>
                </li>
                </ul>
                
                <a class="nav-link" href='#'><img class="icon" src="images/template/iconePanier.png" alt="Panier" title="Panier" /></a>
                <a class="nav-link" href='#'><img class="icon" src="images/template/iconeProfil.png" alt="Connexion" title="Connexion" /></a>   

        </div>
    </nav>
        <div id ="bandeau">
            <img src="/images/template/CesiBordeaux.jpg" alt="photo du CESI bordeaux" id="imgBandeau"> </div>
            <div id="carre"> </div>
        </div>
        <div id="footer" class="flex-container">
                <div id="contact" class="colonne">
                    <h3> CONTACT / INFORMATION </h3>
                    <ul>
                        <a href="mailto:communication@bdecesibordeaux.fr" class="button nav-link"> communication@bdecesibordeaux.fr </a>
                        <a href="" class="button nav-link"> CGU </a>
                        <a href="" class="button nav-link"> Mentions légales </a>
                    </ul>
                </div>
                <div class="whiteBar"></div>
                <div id="event" class="colonne">
                    <h3> ÉVÈNEMENTIEL </h3>
                    <ul>
                        <a href="" class="button nav-link">Programme</a>
                        <a href="" class="button nav-link">Évènements passés</a>
                        <a href="" class="button nav-link">Boîte a idée</a>
                    </ul>
                </div>
                <div id="boutique" class="colonne">
                    <h3>BOUTIQUE</h3>
                    <ul>
                        <a href="" class="button nav-link">Vêtements </a>
                        <a href="" class="button nav-link">Accessoires</a>
                        <a href="" class="button nav-link">Billeterie</a>
                        <a href="" class="button nav-link">Panier</a>
                    </ul>
                </div>
                <div class="whiteBar"></div>
                <div id="network" class="flex-container" >
                    <a href = "https://www.facebook.com/bdecesibdx/">
                        <i class="fab fa-facebook fa-3x"></i>
                    </a>
                    <a href = "https://www.instagram.com/bde_cesi_bdx/">
                        <i class="fab fa-instagram fa-3x" ></i>
                    </a>
                    <a href = "https://www.cesi.fr">
                    <img src="/images/template/CESIAlumni.png" alt="logo cesi" id="logoCesi" class="icon"> </div>
                    </a>
                </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
