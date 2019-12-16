@extends('layouts.connect')

@section('background')


<div id='insecteintro'>
    <h2 class='titreintro'>Nous contacter </h2>
</div>


@endsection

@section('content')




    <form id="contactform" class='boxconnect' method="post" action="{{route('contact.store')}}">
    @csrf
            <div id="contactformlabel">

                <label>Nom</label><input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required>
                @error('nom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label>Prénom</label><input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}">
                @error('prenom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label>Téléphone</label><input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}">
                @error('telephone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label>E-Mail</label><input type="text" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

        <div id="contactformtext">

            <label>Message</label>

            <textarea type="text" name="message" cols="70" rows="10" class="btn btn-primary"></textarea>

        </div>

        <button type="submit">Envoyer</button>

    </form>

@endsection
