@extends('layouts.backLayout')

@section('content')

<div id='formCommentaire'>

    <form action="@isset($commentaire){{route('commentaire.update', $commentaire->id)}}@else{{route('commentaire.store')}}@endisset" method="POST">
						@csrf
						@isset($commentaire) @method('POST') @endisset

        <h2>Modification d'un commentaire par le modérateur sur la recette :  {{ $commentaire->recette->titre_recette }} </h2>
                        <img class='pict' id='close' src="{{asset('img/picto/cross.png')}}"/>


        <div class='form-group'>

            <div class="YSeditor">
                <textarea rows="20" cols="100" class="form-control" @error('texte') is-invalid @enderror name="texte" required>@isset($commentaire)
                {{$commentaire->texte}}@else{{ old('texte') }}@endisset</textarea>
            </div>

            @error('texte')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        </div>



        <input type="submit" id='submit' value='Enregistrer' >

    </form>

</div>
@endsection
