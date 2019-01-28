
<link rel="stylesheet" type="text/css" href="css/evenements.css" media="all"/>
    <title>BDE CESI Bordeaux - Evenements</title>

@extends('layout')

@section('title')
    <h1>Evenements</h1>
@endsection

@section('content')

<div class="eventsContainer">
    <aside>
        <form id='formCategory' action="#">
            <h4>Évènements</h4>
            <div>
                <input type="radio" id="choice1" name="time" value="future">
                <label for="choice1">Futurs</label>
            </div>
            <div>
                <input type="radio" id="choice2" name="time"  value="past">
                <label for="choice2">Passés</label> 
            </div>
            <div>
                <input type="radio" id="choice3" name="time"  value="">
                <label for="choice2">#NoFilter</label> 
            </div>
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