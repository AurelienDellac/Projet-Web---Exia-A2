{{HTML::style("css/boiteIdee.css")}}

<title>BDE CESI Bordeaux - Detruire Idée</title>

@extends ('layout')

@section('title')
    <h1>Detruire Idée</h1>
@endsection

@section('content')

@csrf
<section id='ideas'>
</section>

@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{HTML::script("js/detruireIdee.js")}}