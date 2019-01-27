
<link rel="stylesheet" type="text/css" href="css/evenements.css" media="all"/>
    <title>BDE CESI Bordeaux - Evenements</title>

@extends('layout')

@section('title')
    <h1>Evenements</h1>
@endsection

@section('content')

<div class="eventsContainer">
    <aside>
        <form id='searchForm' action="#">
        <p>Rechercher</p>
            <input type="text"  id="search" name="search"  value="">
        </form>
        <form id='formCategory' action="#">
            <p>Catégories</p>
            <input type="radio" id="choice1" name="cat" value="category/1">
            <label for="choice1">Vetements</label><br>
    
            <input type="radio" id="choice2" name="cat"  value="category/2">
            <label for="choice2">Accessoires</label> <br>
    
            <input type="radio" id="choice3" name="cat"  value="category/3">
            <label for="choice3">Billets</label><br>
            
            <input type="radio"  name="cat"  value="">
            <label for="catégorieChoix3">#nofilter</label><br>

            <p>Prix</p>
            <input type="radio" id="choice4" name="price" value="down">
            <label for="choice1">Ordre croissant</label><br>
    
            <input type="radio" id="choice5" name="price"  value="up">
            <label for="choice2">Ordre décroissant</label> <br>
    
            <input type="radio" id="choice6" name="price"  value="none">
            <label for="choice3">#nofilter</label><br>
            <button id="sort" class ='button' type="button">Filtrer</button>
        </form>
    </aside>
    <div class="eventPanel" id="evenements"></div>
</div>
@endsection
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  {{HTML::script("js/events.js")}}