@extends('/layouts/backlayout')
@section('content')


<div class="backform" class='content'>
    <form action="@isset($recette){{route('recette.update', $recette->id)}}@else{{route('recette.store')}}@endisset" method="POST">
        @csrf
        @isset($recette) @method('PUT') @endisset

        @if (isset($recette))
            <h2>Modification d'une recette</h2>
        @else
            <h2>Création d'une recette</h2>
        @endif

        <div class='form-group'>
            <label><h3>Titre de la recette</h3></label>
            <input type="text" class="form-control" @error ('titre_recette') is-invalid @enderror value="@isset($recette){{$recette->titre_recette}}@else{{ old('titre_recette') }}@endisset" name='titre_recette' required>
            @error('titre_recette')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>

        <div class='form-group' id="ingredients">
        <label><h4>Ingrédients de la recette</h4></label>
        @isset($recette)
            @foreach ($ingredients as $ingredient)
            <input type="text" class="form-control"value="@isset($recette){{$recette->ingredient}}@endisset" name='ingredient[]' multiple="multiple" required>
            @endforeach
        @else
        <input type="text" class="form-control" @error ('ingredient') is-invalid @enderror name='ingredient[]' id='original' multiple="multiple" required>
        @error('titre_recette')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        <br/>
        @enderror
        </div>
        <input type="button" value="Ajouter un ingrédient" onClick="ajoute()"/>

        @endisset

        <div class='form-group'>
            <label><h4>Description de la recette</h4></label>
            <input type="text" class="form-control" @error ('description_recette') is-invalid @enderror value="@isset($recette){{$recette->description_recette}}@else{{ old('description_recette') }}@endisset" name='description_recette' required>
            @error('description_recette')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class='form-group'>
            <label><p>Temps de préparation en minutes</p></label>
            <input type="text" class="form-control" @error('temps_preparation_recette') is-invalid @enderror value="@isset($recette){{$recette->temps_preparation_recette}}@else{{ old('temps_preparation_recette') }}@endisset" name="temps_preparation_recette" required>
            @error('temps_preparation_recette')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>

        <div class='form-group'>
            <label><p>Temps de cuisson en minutes</p></label>
            <input type="text" class="form-control" @error('temps_cuisson_recette') is-invalid @enderror value="@isset($recette){{$recette->temps_cuisson_recette}}@else{{ old('temps_cuisson_recette') }}@endisset" name="temps_cuisson_recette" required>
            @error('temps_cuisson_recette')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>


        <div class='form-group'>
            <label><p>Difficulte recette</p></label>
            <select class="form-control" value="@isset($recette){{$recette->difficulte_recette}}@endisset" name="difficulte_recette" required>
                <option value="1">1-Facile</option>
                <option value="2">2-Moyen</option>
                <option value="3">3-Expert</option>
            </select>
        </div>

        <div class='form-group'>
            <label><p>Appetance recette</p></label>
            <select class="form-control" value="@isset($recette){{$recette->appetance_recette}}@endisset" name="appetance_recette" required>
                    <option value="1">1-Entomophage Débutant</option>
                    <option value="2">2-Entomophage Moyen</option>
                    <option value="3">3-Entomophage Confirmé</option>
            </select>
        </div>

        <div class='form-group'>
            <label><p>Nombre de parts</p></label>
            <input type="text" class="form-control" @error('portion_recette') is-invalid @enderror value="@isset($recette){{$recette->portion_recette}}@else{{ old('portion_recette') }}@endisset" name="portion_recette">
            @error('portion_recette')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>


        <div class='form-group'>
            <label><h3>Déroulé</h3></label>
            <div class="YSeditor">
                <textarea rows="20" cols="100" class="form-control" @error('deroule_recette') is-invalid @enderror  name="deroule_recette" required>@isset($recette)
                    {{$recette->deroule_recette}}@else{{ old('deroule_recette') }}@endisset</textarea>
            </div>

            @error('deroule_recette')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>

        <div class='form-group'>
            <label>Image  (optionnelle)</label>
            <input id="image1" type="file" name="image1" value="" />
            </div>

         <input type="submit" id='submit' value='Enregistrer' >


    </form>
</div>


<script>
function ajoute()
{
   var input = document.getElementById('original');
   var newInput = input.cloneNode();
   newInput.id = '';
   input.parentElement.appendChild(newInput);
}
</script>
@endsection
