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
                    <input type="text" class="form-control" @error('titre_recette') is-invalid @enderror value="@isset($recette){{$recette->titre_recette}}@else{{ old('titre_recette') }}@endisset" name="titre_recette" required>
                    @error('titre_recette')
					<div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class='form-group'>
                    <label><p>Description de la recette</p></label>
                    <input type="texte" class="form-control" @error('description_recette') is-invalid @enderror value="@isset($recette){{$recette->description_recette}}@else{{ old('description_recette') }}@endisset" name="description_recette" required>
                    @error('description_recette')
                   <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class='form-group'>
                    <label><p>Temps de préparation</p></label>
                    <input type="number" class="form-control" @error('temps_preparation_recette') is-invalid @enderror value="@isset($recette){{$recette->temps_preparation_recerte}}@else{{ old('temps_preparation_recette') }}@endisset" name="temps_preparation_recette" required>
                    @error('temps_preparation_recette')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class='form-group'>
                    <label><p>Temps de cuisson</p></label>
                    <input type="number" class="form-control" @error('temps_cuisson_recette') is-invalid @enderror value="@isset($recette){{$recette->temps_cuisson_recerte}}@else{{ old('temps_cuisson_recette') }}@endisset" name="temps_cuisson_recette" required>
                    @error('temps_cuisson_recette')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class='form-group'>
                    <label><p>Difficulte recette</p></label>
                    <input type="text" class="form-control" @error('difficulte_recette') is-invalid @enderror value="@isset($recette){{$recette->difficulte_recette}}@else{{ old('difficulte_recette') }}@endisset" name="difficulte_recette" required>

                    <option>sélectionnez</option>

                    @isset($recette)
                    <option value="Facile" {{old('difficulte_recette') == $recette->difficulte? "selected" : ""}}> {{$recette->recette_difficulte}}>
                    </option>
                    <option value="Moyen" {{old('difficulte_recette') == $recette->difficulte? "selected" : ""}}> {{$recette->recette_difficulte}}>
                    </option>
                    <option value="Difficile" {{old('difficulte_recette') == $recette->difficulte? "selected" : ""}}> {{$recette->recette_difficulte}}>
                    </option>

                    @error('difficulte_recette')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class='form-group'>
                    <label><p>Appetance recette</p></label>
                    <input type="text" class="form-control" @error('appetance_recette') is-invalid @enderror value="@isset($recette){{$recette->appetance_recette}}@else{{ old('appetance_recette') }}@endisset" name="appetance_recette" required>
                    @error('appetance_recette')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



    <input type="submit" id='submit' value='Enregistrer' >

</form>
</div>
</div>
</div>
@endsection
