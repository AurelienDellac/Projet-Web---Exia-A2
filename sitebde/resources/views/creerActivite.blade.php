<link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>

    <title>BDE CESI Bordeaux - Créer une idée</title>


@extends ('layout')

@section('title')
    <h1>Créer une activité</h1>
@endsection

@section('content')



<form method="POST" enctype="multipart/form-data" action="{{route("storeActivity")}}">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="title">Nom de l'activité</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Idée">
      </div>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Description">
    </div>
    <a>Choisir une image</a>

    <div class="form-row">

  <input type="file"
         id="image" name="image"
         accept="image/png, image/jpeg">
    </div>
    
    <button type="submit" class="btn btn-primary">Créer</button>
  </form>


@endsection