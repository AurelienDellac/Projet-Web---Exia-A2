    <link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>

    <title>Boutique</title>

@extends('layout') 
@section('content')
<aside>
<form id='formCategory'>
  <p>Catégorie :</p>
  <div id='blabla'>
    <input type="radio" id="1"
     name="categorie" value="1">
    <label for="catégorieChoix1">Vetements</label><br>

    <input type="radio" id="2"
     name="categorie" value="2">
    <label for="catégorieChoix2">Accessoires</label> <br>

    <input type="radio" id="3"
     name="categorie" value="3">
    <label for="catégorieChoix3">Billets</label> <br>	
  </div>
  <div>
    <button class ='button' type="submit" onclick="form">Envoyer</button>
  </div>
</form>
</aside>

<div class="card-deck" id="products">

</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/boutique.js"> </script> 

@stop

