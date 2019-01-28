<link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>


    <title>BDE CESI Bordeaux - Créer un évènement</title>


@extends ('layout')

@section('title')
    <h1>Créer un évènement</h1>
@endsection

@section('content')



<form method="POST" enctype="multipart/form-data" action="{{route("storeEvent")}}">
  @csrf
    <div class="form-row" id ="event">
            <div class="form-group col-md-2">
                    <label for="name"> Nom</label>
                    <p type="text" class="form-control" id="name" name="name" >Nom
                    </p>
              </div>
      <div class="form-group col-md-2">
            <label for="fee"> Prix</label>
            <input type="text" class="form-control" id="fee" name="fee" placeholder = "Prix" >
      </div>
      <div class="form-group col-md-2">
            <label for="fee"> Date</label>
            <input type="date" class="form-control" id="date" name="date" >
      </div>
      <div class="col-md-2">
            <label for="category">Activité</label>
            <select style="text-transform: capitalize" class="form-control" name="activity" id="activite" required autofocus>
                    <option value="bambou">-- Choisir une activité --</option>
                    @foreach($activities as $activity)
                        <option value="{{$activity->id}}">{{$activity->title}}</option>
                    @endforeach
          </select>
        <a href="{{route("createActivity")}}" class="nav-link  oui">
            Créez votre activité.

            </a>
    </div>
    <div class="form-group col-md-8">
            <label for="description"> Description</label>
            <p type="description" class="form-control" id="description" name="description" > Description
            </p>
      </div>

    </div>
  
    
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <button type="submit" class="btn btn-primary">Créer</button>
  </form>


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{HTML::script("js/creerEvent.js")}}