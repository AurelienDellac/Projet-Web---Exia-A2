{{HTML::style("css/boiteIdee.css")}}

    <title>BDE CESI Bordeaux - Boite à idée</title>


    @extends ('layout')
    
    @section('title')
        <h1>Boite à idée</h1>
    @endsection
@section('content')
        <a href="/creerIdee" class="nav-link  oui">
            <h2>Créez votre idée maintenant !</h2>

            </a>
<section id='ideas'>
    
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/boiteIdee.js")}}
