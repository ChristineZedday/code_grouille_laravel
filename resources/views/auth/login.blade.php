@extends('layouts.connect')

@section('content')
<div class='boxconnect'>
<h2>Connexion</h2>

<form method="POST" action="{{route('verify')}}">
               @csrf

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

                           <label class="form-check-label" for="remember">
                               {{ __('Remember Me') }}
                           </label>

                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
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
