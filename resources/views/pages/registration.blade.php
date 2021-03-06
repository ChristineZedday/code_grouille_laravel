@extends('layouts.connect')

@section('content')

<div id='register' class='boxconnect'>
    <h1>Bienvenue, nouvel entomophage</h1>
             <form method="POST" action="{{ route('youpi') }}">
                @csrf

                <label for="name">Votre nom</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email">Votre mail</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <label for="password" class="">Choisissez un mot de passe</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror



                <div class="form-group row">

                    <label for="password-confirm" class="">Confirmez</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                </div>
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
{{--

 --}}
                <button id='submit' type="submit" class="btn btn-primary">
                   S'enregistrer
                </button>

                <input type="checkbox" name="CGUsite" checked="" required>
                <label for="CGU">J'adhère aux conditions générales d'utilisation du site. </label>
        </form>
</div>

@endsection

