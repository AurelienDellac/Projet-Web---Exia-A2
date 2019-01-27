@extends('layout')
<title>Boutique</title>
{{HTML::style("css/boiteIdee.css")}}

@section('content')
<div class="productPanel" id="products">
    
</div>

@stop

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/product.js")}}
