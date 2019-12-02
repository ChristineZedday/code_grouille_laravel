@extends('layouts.backLayout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-12">


<form action="@isset($recette){{route('recette.update', $recette->id)}}@else{{route('recette.store')}}@endisset" method="POST">
						@csrf
						@isset($recette) @method('PUT') @endisset

    <img class='pict' id='close' src="../img/picto/cross.png"/>

    @if (isset($recette))
							<h2>Modification d'une recette</h2>
						@else
							<h2>Création d'une recette</h2>
						@endif
    <div class='form-group'>
    <label><h3>Titre de la recette</h3></label>
    <input type="text" class="form-control" @error('titre_recette') is-invalid @enderror" value="@isset($recette){{$recette->titre_recette}}@else{{ old('titre_recette') }}@endisset" name="titre_recette" required>
    @error('titre_recette')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
                        	@enderror
    </div>

    <div class='form-group'>
    <label><p>Description de la recette</p></label>
    <input type="texte" class="form-control" @error('nom_latin_insecte') is-invalid @enderror" value="@isset($insecte){{$insecte->nom_latin_insecte}}@else{{ old('nom_latin_insecte') }}@endisset" name="nom_latin_insecte" required>
    @error('nom_latin_insecte')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
                        	@enderror
    </div>

    <div class='form-group'>
    <label><h3>Ordre</h3></label>
    <input type="texte" class="form-control" @error('ordre_insecte') is-invalid @enderror" value="@isset($insecte){{$insecte->ordre_insecte}}@else{{ old('ordre_insecte') }}@endisset" name="ordre_insecte" required>
    @error('ordre_insecte')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
                        	@enderror
    </div>

    <div class='form-groupl'>
    <label><h3>Description</h3></label>
    <textarea rows="20" cols="100" class="form-control" @error('description_insecte') is-invalid @enderror" name="description_insecte" required> @isset($insecte){{$insecte->description_insecte}}@else{{ old('description_insecte') }}@endisset
    </textarea>
    @error('description_insecte')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
                        	@enderror
    </div>

    <input type="submit" id='submit' value='Enregistrer' >

</form>
</div>
</div>
</div>
@endsection
