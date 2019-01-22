<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/default.css">
        <title>Laravel</title>  

    </head>

    <body>
        <div id ="bandeau">
        <div> 
            <img src="/ImageTemplate/CesiBordeaux.jpg" alt="photo du CESI bordeaux" id="imgBandeau"> </div>
            <br>
            <!-- <div id="carre"> </a></div> -->
        </div>

        <div id="footer">
            <tr>
                <div id="colonne1" class="colonne">
                    <h2> CONTACT / INFORMATION <h2>
                    <ul>
                        <li> communication@bdecesibordeaux.fr </li>
                        <li> CGU </li>
                        <li> Mentions légales </li>
                    </ul>
                <div>
                <div id="colonne2" class="colonne">
                    <h2> ÉVÈNEMENTIEL </h2>
                    <ul>
                        <li>Programme</li>
                        <li>Évènements passés</li>
                        <li>Boîte a idée</li>
                    </ul>
                </div>
                <div id="colonne3" class="colonne">
                    <h2>Boutique</h2>
                    <ul>
                        <li>Vêtements</li>
                        <li>Accessoires</li>
                        <li>Billeterie</li>
                        <li>Panier</li>
                    </ul>
            </tr>
        </div>
    </body>
</html>
