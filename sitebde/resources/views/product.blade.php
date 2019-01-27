@extends('layout')
<title>Boutique</title>
{{HTML::style("css/boiteIdee.css")}}

@section('content')
<div class="productPanel" id="products">
    @if($user != null && $user->id_role == 2)
        </div><hr>
        <form method="POST" action="{{route('destroyProduct', ['id' => $id])}}" onsubmit="confirm('Êtes vous sur de vouloir supprimer ce produit ?')">
            @csrf
            <button type='submit' class='btn btn-danger'> Supprimer ce produit </button>
        </form>
        </div>
    @endif
</div>

@stop

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/product.js")}}
