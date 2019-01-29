{{HTML::style("css/boiteIdee.css")}}

    <title>BDE CESI Bordeaux - Boite à idée</title>


    @extends ('layout')
    
    @section('title')
        <h1>Boite à idée</h1>
    @endsection

@section('content')
<div class="ideaContainer">
        <a href="/creerIdee" class="nav-link  oui">
            <button class="btn-dark btn-lg">Créez votre idée maintenant !</button>

        </a>
            @csrf
    <section class="ideas" id='ideas'>
        
    </section>
</div>
    @endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

{{HTML::script("js/boiteIdee.js")}}
