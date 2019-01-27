
<link rel="stylesheet" type="text/css" href="css/evenements.css" media="all"/>
    <title>BDE CESI Bordeaux - Evenements</title>

@extends('layout')

@section('title')
    <h1>Evenements</h1>
@endsection

@section('content')

<div class="eventPanel" id="evenements"></div>

@endsection
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  {{HTML::script("js/events.js")}}