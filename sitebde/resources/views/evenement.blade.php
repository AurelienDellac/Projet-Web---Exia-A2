@extends('layout') {{HTML::style('css/evenement.css')}} 
@section('title')
<h1 id="title"></h1>
@endsection
 
@section('content')
<div class="eventContainer">
    @if($user != null)
    <div class="eventPanel" id="{{$user->id }}">
        @else
        <div class="eventPanel" id="0">
            @endif
            <div class="eventHead">
                <img id="eventImage" src="" alt="evenement">
            </div>
            <div class="eventBody">
                <div class="eventItem">
                    <div class="eventLabel labelLeft" id="titleEvent"></div>
                    <div class="eventLabel labelRight" id="dateEvent"></div>
                </div>
                <div class="eventItem">
                    <div class="eventLabel labelLeft" id="descriptionEvent"></div>
                </div>
                <div class="eventItem">
                    <div class="eventLabel labelLeft" id="contactEvent"></div>
                    <div class="eventLabel labelRight" id="priceEvent"></div>
                </div>
                <div class="eventItem">
                    @if($user != null && $user->id_role == 2)
                    <div class="eventLabel labelLeft" id="pdfLabel">
                        <button class="btn btn-dark" type="button" id="pdf">Inscrits.pdf</button>
                    </div>
                    <div class="eventLabel labelAdmin" id="">
                        <form method="POST" action="{{route('maskedEvent', ['id' => $id_event])}}" onsubmit="return confirm('Signaler cet évènement ?')">
                            @csrf
                            <button class="btn btn-danger" type="submit" id="pdf">Signaler l'évènement</button>
                        </form>
                        <form method="POST" action="{{route('destroyEvent', ['id' => $id_event])}}" onsubmit="return confirm('Supprimer cet évènement ?')">
                            @csrf
                            <button class="btn btn-danger" type="submit" id="pdf">Supprimer l'évènement</button>
                        </form>
                    </div>
                    @endif 
                    @if ($user != null && $user->id_role == 3)
                    <div class="eventLabel labelLeft" id="pdfLabel">
                            <button class="btn btn-dark" type="button" id="pdf">inscrits.pdf</button>
                        </div>
                        <div class="eventLabel labelAdmin" id="">
                            <form method="POST" action="{{route('maskedEvent', ['id' => $id_event])}}" onsubmit="return confirm('Signaler cet évènement ?')">
                                @csrf
                                <button class="btn btn-danger" type="submit" id="pdf">Signaler l'évènement</button>
                            </form>
                        </div>
                    @endif
                    <div class="eventLabel labelRight" id="subscribe">
                        @if($isRegister == null)
                            <form method="POST" action="{{route('storeRegistration')}}">
                            <button class="btn btn-success" name="event" value="{{$id_event}}" type="submit">S'inscrire</button>                           
                        @else
                            <form method="POST" action="{{route('destroyRegistration', ['id' => $id_event])}}">
                            <button class="btn btn-danger" type="submit">Se désinscrire</button> 
                        @endif 
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mediaPanel">
            <div class="mediaPhotoPanel">
                <img class="mediaPhoto" src="" alt="evenement media photo">
                <div class="mediaLike"><button type="button" class="btn"><i class="fas fa-thumbs-up fa-2x"></i></button>50</div>
            </div>
            <div class="mediaCredit">Credit de la photo</div>        
            <div class="mediaPost">
                <div class="mediaComment">
                    <div class="commentHead">
                        Jean eude
                    </div>
                    <div class="commentContent">
                        Commentaire de jean eude
                    </div>
                </div>
                <button type="button" class="btn"><i class="fas fa-thumbs-up fa-2x"></i></button>
                <p>50</p>
            </div>
            <div class="mediaPost">
                    <div class="mediaComment">
                        <div class="commentHead">
                            Jean eude
                        </div>
                        <div class="commentContent">
                            Commentaire de jean eude
                        </div>
                    </div>
                    <button type="button" class="btn"><i class="fas fa-thumbs-up fa-2x"></i></button>50
                </div>
        <div class="mediaPost">
                <div class="mediaComment">
                    <div class="commentHead">
                        Jean eude
                    </div>
                    <div class="commentContent">
                        Commentaire de jean eude
                    </div>
                </div>
                <button type="button" class="btn"><i class="fas fa-thumbs-up fa-2x"></i></button>50
            </div>
    </div>
@endsection




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{HTML::script("js/evenement.js")}}