@extends('layout')
<title>Boutique</title>
{{HTML::style("css/boiteIdee.css")}}

@section('content')
    <div class='container pt-5'> 
        <div class='row'> 
            <div class='col-md-12 text-center'> 
                <div class='col-md-6 no-padding lib-item' data-category='view'> 
                    <div class='lib-panel'> 
                        <div class='row box-shadow w-100' id="productPanel"> 
                            <div class='col-md-6 image-row' id="imagePanel"></div>
                            <div class='col-md-6 card-text' id="infoPanel">
                                <hr>
                                <form method='POST' action='{{route("storeOrder")}}' id='order'>
                                    @csrf
                                    <input type="number" name="quantity" id="quantity" placeholder="quantité" min="0"/>
                                    <button type='submit' class='btn btn-success' value="{{$id}}" name="submit" id="submit"> Ajouter au panier  </button>
                                </form>
                                @if($user != null && $user->id_role == 2)
                                    <div>
                                    <hr>
                                    <form method="POST" action="{{route('destroyProduct', ['id' => $id])}}" onsubmit="confirm('Êtes vous sur de vouloir supprimer ce produit ?')">
                                        @csrf
                                        <button type='submit' class='btn btn-danger'> Supprimer ce produit </button>
                                    </form>
                                    </div>
                                @endif
                            </div>                            
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
@stop

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/product.js")}}
