@extends('layouts.backLayout')

@section('content')

<div id='formMembre'>

    <form action="@isset($user){{route('membre.update', $user->id)}}@else{{route('membre.store')}}@endisset" method="POST">
						@csrf
						@isset($user) @method('PUT') @endisset
      <img class='pict' id='close' src="{{asset('img/picto/cross.png')}}"/>
    @if (isset($user))
        <h2>Modification d'un membre</h2>
    @else
        <h2>Création d'un membre</h2>
    @endif

    <div class='form-group'>
        <label><h3>Nom du membre</h3></label>

        <input type="text" class="form-control" @error('name') is-invalid @enderror value="@isset($user){{$user->name}}@else{{ old('name') }}@endisset" name="name" required>

        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>

    <div class='form-group'>
    <label><h3>Adresse e-mail</h3></label>
    <input type="texte" class="form-control" @error('email') is-invalid @enderror value="@isset($user){{$user->email}}@else{{ old('email') }}@endisset" name="email" required>

        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>

    <div class='form-group'>
    <label><h3>Mot de passe</h3></label>
    <input type="texte" class="form-control" @error('password') is-invalid @enderror value="@isset($user){{$user->password}}@else{{ old('password') }}@endisset" name="password" required>

        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>


    <div class='form-group'>
    <label><h3>Confirmation du mot de passe</h3></label>
    <input type="texte" class="form-control" @error('password') is-invalid @enderror value="@isset($user){{$user->password}}@else{{ old('password') }}@endisset" name="password_confirmation" required>

        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>
     <div class='form-group'>
            <label><p>Rôle</p></label>
            <select class="form-control"  name="role" required>
                <option value="utilisateur">Utilisateur</option>
                <option value="admin">Administrateur</option>
            </select>
        </div>


    <input type="submit" id='submit' value='Enregistrer' >

</form>

</div>
@endsection
