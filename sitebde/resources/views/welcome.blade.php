<link rel="stylesheet" type="text/css" href="css/Accueil.css" media="all" />
<title>BDE CESI Bordeaux - Accueil</title>

@extends ('layout')

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"> -->

@section('title')
    <h1>BDE CESI Bordeaux</h1>
@endsection

@section('content')
<div id="welcome">
  <div id="divEvent" class="divCarousel">
    <div id="events" class="carousel slide" data-ride="carousel" data-interval="8000" data-wrap="true">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#events" data-slide-to="0" class="active"></li>
        <li data-target="#events" data-slide-to="1"></li>
        <li data-target="#events" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner" >
        <div class="iner-element" id="evenements"></div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#events" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#events" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
  
  <div  id="divProduit" class="divCarousel">
    <div id="product" class="carousel slide" data-ride="carousel" data-interval="8000" data-wrap="true">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#product" data-slide-to="0" class="active"></li>
        <li data-target="#product" data-slide-to="1"></li>
        <li data-target="#product" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner" >
        <div class="iner-element" id="produits"></div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#product" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#product" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    
  </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
{{HTML::script("js/welcome.js")}}