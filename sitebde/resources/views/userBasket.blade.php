@extends('layout') {{HTML::style("css/basket.css")}}
<title>BDE CESI Bordeaux - Panier utilisateur</title>

@section('title')
<h1 id="title"><h1>
@endsection
 
@section('content')
        <div class="basketContainer">
            <div class="basketPanel" id="{{$user->id}}">
                <div class="basketBody"></div>
            </div>
        </div>
@endsection
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{HTML::script("js/basketUser.js")}}