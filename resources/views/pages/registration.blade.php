@extends('layouts.bug')

@section('content')

<div id='register'>
    <h1>Bienvenue, cher entomophage</h1>
        {{-- <form method="POST" action="{{ route('register') }}" class='boxconnect'> --}}
             <form method="POST" action="{{ route('youpi') }}" class='boxconnect'>
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
{{--
                <label for="password-confirm" class="">Confirmez</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
 --}}
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
        </form>
</div>
@endsection

