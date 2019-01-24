
<link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>
    <title>Boutique</title>

@extends('layout')

@section('content')
<div class="shopContainer">
  <aside>
  <form id='formCategory' action="#">
    <p>Catégories</p>
    <div id='blabla'>
      <input type="radio" name="cat" value="1">
      <label for="catégorieChoix1">Vetements</label><br>

      <input type="radio"  name="cat"  value="2">
      <label for="catégorieChoix2">Accessoires</label> <br>

      <input type="radio"  name="cat"  value="3">
      <label for="catégorieChoix3">Billets</label> <br> 
    </div>
    <div>
      <button id="sort" class ='button' type="button">Filtrer</button>
    </div>
  </form>
  </aside>
  <div class="productPanel" id="products"></div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/boutique.js"> </script> 
