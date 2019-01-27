<link rel="stylesheet" type="text/css" href="css/boutique.css" media="all" />
<title>BDE CESI Bordeaux - Ajouter Produit</title>




@extends('layout') 
@section('title')
<h1>Ajouter un Produit</h1>
@endsection
 
@section('content')


<form method="POST" action="{{ route('storeProduct') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="label">Nom du produit</label>
      <input type="text" class="form-control" id="label" name="label" placeholder="Produit" required>
    </div>
    <div class="form-group col-md-6">
      <label for="price">Prix</label>
      <input class="form-control" id="price" name="price" placeholder="Prix" required>
    </div>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="stock">Stock</label>
      <input type="text" class="form-control" id="stock" name="stock" required>
    </div>
    <div class="form-group col-md-4">
      <label for="category">Catégorie</label>
      <select style="text-transform: capitalize" class="form-control" name="category" required autofocus>
                <option value="">-- Choisir une catégorie --</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
      </select>
    </div>
    <input type="file" id="image" name="image" accept="image/png, image/jpeg">

    <button type="submit" class="btn btn-primary">Ajouter le produit</button>
</form>
@endsection