@extends('layout') {{HTML::style("css/basket.css")}}
<title>BDE CESI Bordeaux - Panier</title>


@section('title')
<h1>Panier
    <h1>
@endsection
 
@section('content')
        <div class="basketContainer">
            <div class="basketPanel" id="{{$user->id}}">
                <div class="basketBody"></div>
            </div>
            <div class="validate">
                <form method="POST" action="{{route('confirmOrders')}}" onsubmit="return confirm('Valider cette commande ?');">
                    @csrf
                    <button type="submit" class="btn btn-success">ACHETER</button>
                </form>
            </div>
        </div>
@endsection



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{HTML::script("js/basket.js")}}