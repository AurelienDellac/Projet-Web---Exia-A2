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
                <img class="eventImage" src="" alt="evenement">
            </div>
            <div class="eventBody">
                <div class="eventItem">
                    <div class="eventLabel" id="titleEvent"></div>
                    <div class="eventLabel" id="dateEvent"></div>
                </div>
                <div class="eventItem">
                    <div class="eventLabel" id="descriptionEvent"></div>
                </div>
                <div class="eventItem">
                    <div class="eventLabel" id="priceEvent"></div>
                </div>
                <div class="eventItem">
                    <div class="eventLabel" id="subscribe">
                        <form method="POST" action="{{route('storeRegistration')}}">
                            
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
    </div>
</div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{HTML::script("js/evenement.js")}}