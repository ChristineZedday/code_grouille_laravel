@extends('../layouts/backlayout')

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
                        <label><p>Déroulé de la recette</p></label>
                        <input type="texte" class="form-control" @error('deroule_recette') is-invalid @enderror value="@isset($recette){{$recette->deroule_recette}}@else{{ old('deroule_recette') }}@endisset" name="deroule_recette" required>
                        @error('deroule_recette')
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

                    <select type="text" class="form-control" @error('difficulte_recette') is-invalid @enderror value="@isset($recette){{$recette->difficulte_recette}}@else{{ old('difficulte_recette') }}@endisset" name="difficulte_recette" required>
                        <option value="Facile" >Facile</option>
                        <option value="Moyen" >Moyen</option>
                        <option value="Expert" >Expert</option>
                    </select>

                    @error('difficulte_recette')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class='form-group'>
                    <label><p>Appetance recette</p></label>
                    <select type="text" class="form-control" @error('difficulte_recette') is-invalid @enderror value="@isset($recette){{$recette->difficulte_recette}}@else{{ old('difficulte_recette') }}@endisset" name="difficulte_recette" required>
                            <option value="Entomophage Débutant">Entomophage Débutant</option>
                            <option value="Entomophage Moyen">Entomophage Moyen</option>
                            <option value="Entomophage Confirmé">Entomophage Confirmé</option>
                        </select>
                    @error('appetance_recette')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class='form-group'>
                        <label><p>Nombre de parts</p></label>
                        <input type="number" class="form-control" @error('portion_recette') is-invalid @enderror value="@isset($recette){{$recette->portion_recerte}}@else{{ old('portion_recette') }}@endisset" name="portion_recette" required>
                        @error('portion_recette')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

    <input type="submit" id="submit" value="Enregistrer" >

</form>
</div>
</div>
</div>
@endsection
