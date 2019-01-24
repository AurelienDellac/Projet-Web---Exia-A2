@extends('Layout') {{HTML::style("css/register.css")}} 
@section('title')
<h1>Connexion</h1>
@endsection
 
@section('content')
<div class="panel">
    <div class="card">
        <div class="card-header">{{ __('Se connecter') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Addresse e-mail') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            required autofocus> @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Mot de passe') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12  col-xl-6 offset-xl-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                                {{ __('Se souvenir de moi') }}
                                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-lg-12  col-xl-8 offset-xl-4">
                        <button type="submit" class="btn btn-primary">
                                            {{ __('Valider') }}
                                        </button> @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié ?') }}
                                            </a> @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header test">{{ __('S\'inscrire') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Nom') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                            required autofocus> @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="forename" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Prénom') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="forename" type="text" class="form-control{{ $errors->has('forename') ? ' is-invalid' : '' }}" name="forename"
                            value="{{ old('forename') }}" required autofocus> @if ($errors->has('forename'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('forename') }}</strong>
                                    </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Adresse e-mail') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            required> @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Mot de passe') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Confirmer le mot de passe') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="center" class="col-lg-12 col-xl-4  col-form-label text-xl-right">{{ __('Centre') }}</label>

                    <div class="col-lg-12  col-xl-6">
                        <select style="text-transform: capitalize" class="form-control{{ $errors->has('center') ? ' is-invalid' : '' }}" name="center"
                            value="{{ old('center') }}" required autofocus>
                                    <option value="">-- Choisir son centre --</option>
                                    @foreach($centers as $center)
                                        <option value="{{$center->id}}">{{$center->name}}</option>
                                    @endforeach
                                </select> @if ($errors->has('center'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('center') }}</strong>
                                    </span> @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-lg-12  col-xl-6 offset-xl-4">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Valider') }}
                                </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection