@extends('layouts.default')

@section('content')
<div class='boxconnect'>
<h2>Connexion</h2>

<<<<<<< HEAD
<form method="POST" action="{{route('verify')}}">
               @csrf
=======
                <div class="card-body">
                    <form method="POST" action="{{ route('verify') }}">
                        @csrf
>>>>>>> f83bcf12696e4c6edc08b2c1ed4f882c3c49ef26

                     <label for="email">{{ __('E-Mail Address') }}</label>
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                       @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror

                   <label for="password">{{ __('Password') }}</label>
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror


                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                           <label class="form-check-label" for="remember">
                               {{ __('Remember Me') }}
                           </label>
                       </div>

                       <button type="submit" class="btn btn-primary">
                           {{ __('Login') }}
                       </button>

                       @if (Route::has('password.request'))
                           <a class="btn btn-link" href="{{ route('password.request') }}">
                               {{ __('Forgot Your Password?') }}
                           </a>
                       @endif
           </form>
</div>
@endsection
