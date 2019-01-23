<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>

    <title>Boutique</title>
</head>
<body>
    

@extends('layout')

@section('content')
<aside>
<form>
  <p>Catégorie :</p>
  <div id='blabla'>
    <input type="radio" id="catégorieChoix1"
     name="catégorie" value="catégorieChoix1">
    <label for="catégorieChoix1">Vetements</label><br>

    <input type="radio" id="catégorieChoix2"
     name="catégorie" value="catégorieChoix2">
    <label for="catégorieChoix2">Accessoires</label> <br>

    <input type="radio" id="catégorieChoix3"
     name="catégorie" value="catégorieChoix3">
    <label for="catégorieChoix3">Billets</label> <br>	
  </div>
  <div>
    <button type="submit">Envoyer</button>
  </div>
</form>
</aside>

<div class="card-deck">

<a class="card link" href='produit1'>
    <img class="card-img-top" src="images/produits/pull.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-description">Ce magnifique pull personnalisable permet aux membre de la team JUL de se reconnaitre.</p>
      <p class="card-text">Prix : 50€</p>
    </div>
</a>

  <a class="card link" href='produit2'>
    <img class="card-img-top" src="images/template/logoInvert.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pull personnalisable</h5>
      <p class="card-text">Ce magnifique pull personnalisable permet aux membre de la team JUL de se reconnaitre.</p>
      <p class="card-text">Prix : 50€</p>
    </div>
</a>
 
  <a class="card link" href='produit3'>
    <img class="card-img-top" src="images/produits/pull.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pull personnalisable</h5>
      <p class="card-text">Ce magnifique pull personnalisable permet aux membre de la team JUL de se reconnaitre.</p>
      <p class="card-text">Prix : 50€</p>
    </div>
</a>
</div>

  @stop


  <script src="js/jquery.min.js" ></script>
  <script src="js/boutique.js"> </script>

</body>
</html>
