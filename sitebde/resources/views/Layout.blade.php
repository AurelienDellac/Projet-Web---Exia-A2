<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>BDE Cesi Bordeaux</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous"> {{HTML::style("css/default.css")}} {{HTML::style("css/navbar.css")}}
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar" >
            <a class="navbar-brand" href="/">{{ HTML::image('images/template/logoInvert.png', 'LOGO', array('class' => 'icon', 'title' => 'LOGO CESI')) }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle myLink" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        Evenements
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item myLink" href="/evenements/future">Evenements futurs</a>
                            <a class="dropdown-item myLink" href="/evenements/past">Evenements passés</a>

                            <a class="dropdown-item myLink" href="/boiteIdee">Boite à idée</a>
                        </div>
                    </li>
                    <li class="nav-item">

                        <a href="/boutique" class="button nav-link myLink">Boutique</a>

                    </li>
                </ul>
                @if($user != null)
                    <a class="nav-link myLink" id="basket" href='{{route("showBasket")}}'><i class="fas fa-shopping-basket fa-2x idUser" id="{{$user->id}}"></i></a>
                    <a class="nav-link myLink" id="logout" href='{{route('register')}}'>{{$fullname = $user->forename . "   " . $user->name}}<i class="fas fa-user-circle fa-3x"></i></a>
                @else
                <a class="nav-link myLink" href='{{route('register')}}'><i class="fas fa-user-circle fa-3x"></i></a>
                @endif
            </div>
        </nav>

        <div id="bandeau" >
            <img src="/images/template/CesiBordeaux.jpg" alt="photo du CESI bordeaux" id="imgBandeau">
            <div class="title">
                @yield("title")
            </div>
        </div>
    </header>
    <main>
        <div id="content" >
            @yield('content')
        </div>  
    </main>
    <footer>
        <div id="footer">
            <div id="contact" class="colonne">
                <h3> CONTACT / INFORMATION </h3>
                    <a href="mailto:communication@bdecesibordeaux.fr" class="nav-link myLink"> communication@bdecesibordeaux.fr </a>
                    <a href="/CGU" class="nav-link myLink"> CGU </a>
                    <a href="/mentionsLegales" class="nav-link myLink"> Mentions légales </a>
            </div>
            <div class="whiteBar"></div>
            <div id="sitemap">
            <div id="event" class="colonne">
                <h3> ÉVÈNEMENTIEL </h3>
                    <a href="/evenements/future" class="nav-link myLink">Programme</a>
                    <a href="/evenements/past" class="nav-link myLink">Évènements passés</a>
                    <a href="/boiteIdee" class="nav-link myLink">Boîte a idée</a>
            </div>

            <div id="boutique" class="colonne">
                <h3><a href="/boutique" class=" myLink">BOUTIQUE </a></h3>
                    <a href="/boutique/1" class="nav-link myLink">Vêtements </a>
                    <a href="/boutique/2" class="nav-link myLink">Accessoires</a>
                    <a href="/boutique/3" class="nav-link myLink">Billeterie</a>
                    <a href="/boutique" class="nav-link myLink">Panier</a>
            </div>
            </div>
            <div class="whiteBar"></div>
            <div id="network" class="colonne">
                <a href="https://www.facebook.com/bdecesibdx/">
                            <i class="fab fa-facebook fa-3x"></i>
                </a>
                <a href="https://www.instagram.com/bde_cesi_bdx/">
                            <i class="fab fa-instagram fa-3x" ></i>
                    </a>
                <a href="https://www.cesi.fr">
                        <img src="/images/template/CESIAlumni.png" alt="logo cesi" id="logoCesi" class="icon"> 
                </a>
            </div>
                        
        </div>
    </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> 
    {{HTML::script("js/basketHeader.js")}}
</body>

</html>