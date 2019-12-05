@extends('../layouts.backLayout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-12">


<form action="@isset($ingredient) {{route('ingredient.update', $ingredient->id)}}
                @else {{route('ingredient.store')}} @endisset" method="POST">
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
    <select class="form-control"  name="insecte_id">
            <option>Aucun ou sélectionnez</option>
        @foreach ($insectes as $insecte)
            @isset($ingredient)
            <option value="@isset($insecte->id) {{$insecte->id}} @endisset" > {{$insecte->nom_insecte }}
                </option>
            @else
            <option value="{{$insecte->id }}" >{{$insecte->nom_insecte}}
            </option>
            @endisset
        @endforeach
    </select>
    </div>

    <div class='form-group'>
    <label><h3>Nom de l'ingrédient</h3></label>
    <input type="texte" class="form-control" @error('nom_ingredient') is-invalid @enderror value="@isset($ingredient){{$ingredient->nom_ingredient}}@else{{ old('nom_ingredient') }}@endisset" name="nom_ingredient" required>
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
