

<link rel="stylesheet" type="text/css" href="css/product.css" media="all"/>
    <title>Boutique</title>

@extends('layout')

@section('content')

<aside class="img">
    {{-- {{HTML::image("images/produits/soiree.png")}} --}}
<a> </a>
</aside>


<div class="productPanel" id="products"></div>

{{-- 
<div class="card">
<h5 class="card-header">JUIF</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}
@stop

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/product.js")}}