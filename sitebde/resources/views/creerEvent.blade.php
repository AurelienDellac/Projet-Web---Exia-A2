<link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>


    <title>BDE CESI Bordeaux - Créer un évènement</title>


@extends ('layout')

@section('title')
    <h1>Créer un évènement</h1>
@endsection

@section('content')



<form method="POST" enctype="multipart/form-data" action="{{route("storeEvent")}}">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="title">Nom de l'évènement</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nom">
      </div>
      <div class="form-group col-md-2">
            <label for="fee"> Prix</label>
            <input type="text" class="form-control" id="fee" name="fee" placeholder="Prix">
      </div>
      <div class="form-group col-md-2">
            <label for="fee"> Date</label>
            <input type="date" class="form-control" id="date" name="date" >
      </div>
      <div class="col-md-2">
            <label for="category">Activité</label>
            <select style="text-transform: capitalize" class="form-control" name="activity" required autofocus>
                    <option value="">-- Choisir une activité --</option>
                    @foreach($activities as $activity)
                        <option value="{{$activity->id}}">{{$activity->title}}</option>
                    @endforeach
          </select>
        <a href="/creerActivite" class="nav-link  oui">
            Créez votre activité.

            </a>
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