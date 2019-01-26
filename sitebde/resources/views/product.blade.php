

<link rel="stylesheet" type="text/css" href="css/product.css" media="all"/>
{{HTML::style("css/boutique.css")}}

<title>Boutique</title>

@extends('layout')

@section('content')

<aside class="img">

<a> </a>
</aside>

<div class="productPanel" id="products"></div>


@stop

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/product.js")}}
