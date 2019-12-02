@extends('layouts.backLayout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-12">


<form action="@isset($ingredient){{route('ingredient.update', $insecte->id)}}@else{{route('ingredient.store')}}@endisset" method="POST">
						@csrf
						@isset($ingredient) @method('PUT') @endisset

    <img class='pict' id='close' src="../img/picto/cross.png"/>

    @if (isset($ingredient))
							<h2>Modification d'un ingrédient</h2>
						@else
							<h2>Création d'un ingrédient</h2>
						@endif
    <div class='form-group'>
    <label><h3>Nom de l'insecte</h3></label>
    <select>
        @foreach ($insectes as $insecte)

        @endforeach
    </select>
    </div>

    <div class='form-group'>
    <label><h3>Nom latin</h3></label>
    <input type="texte" class="form-control" @error('nom_ingredient') is-invalid @enderror" value="@isset($insecte){{$insecte->nom_ingredient}}@else{{ old('nom_ingredient') }}@endisset" name="nom_ingredient" required>
    @error('nom_ingredient')
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
