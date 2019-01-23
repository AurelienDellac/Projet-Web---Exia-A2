@extends ('layout')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="css/evenements.css" media="all"/>
@endsection

@section('content')

<script src="allEvents.js"></script>

<a href="/escalade " class="card flex-container" style="width: 18rem;">
  <img src="images/events/tmp.jpg" class="card-img-top" alt="image escalade">
  <div class="card-body">
    <h5> Escalade </h5>
    <p class="card-text">Faux panneau pour faire des tests</p>
  </div>
</a>

@endsection

