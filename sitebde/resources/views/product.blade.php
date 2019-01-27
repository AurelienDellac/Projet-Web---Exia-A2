@extends('layout')

<title>Boutique</title>
{{HTML::style("css/product.css")}}
{{HTML::style("css/boutique.css")}}

@section('content')

<div class="productPanel" id="products"></div>
{{-- <form method="POST" action="/destroyProduct/22" onsubmit="confirm('Supprimer ce produit ?')">
    <button type="submit">Supprimer produit</button>
</form> --}}

@stop

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/product.js")}}
