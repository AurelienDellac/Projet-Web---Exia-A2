<link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>
    <title>BDE CESI Bordeaux - Ajouter Produit</title>

@extends('layout')
@section('title')
    <h1>Ajouter un Produit</h1>
@endsection


@section('content')


<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom du produit</label>
      <input type="text" class="form-control" id="nameProduct" placeholder="Produit">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prix</label>
      <input  class="form-control" id="price" placeholder="Prix">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Stock</label>
      <input type="text" class="form-control" id="stock">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Catégorie</label>
      <select id="inputState" class="form-control">
        <option selected>Choisir catégorie</option>
        <option>vetements</option>
        <option>accessoires</option>
        <option>billetterie</option>


      </select>
    </div>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Ajouter le produit</button>
</form>



@endsection

