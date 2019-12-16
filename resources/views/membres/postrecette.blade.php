@extends('layouts.member')

@section('content')

{{-- formulaire pour Créer une recette  --}}
<div id="formrecette">
    <form action="{{route('recette.post')}} method="POST">
        @csrf

        <h2 class='membertitle'>Création d'une recette</h2>

        <div class='form-group'>
            <label><h3>Titre de la recette</h3></label>
            <input type="text" class="form-control" @error('titre_recette') is-invalid @enderror value="{{ old('titre_recette') }}" name='titre_recette' required>
            @error('titre_recette')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class='form-group'>
            <label><h4>Description de la recette</h4></label>
            <input type="text" class="form-control" @error('description_recette') is-invalid @enderror value="{{ old('description_recette') }}" name='description_recette' required>
            @error('description_recette')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        
        <div class='form-group' id="ing">
        <label><h4>Ingrédients de la recette</h4></label>
  
        <div class='form-group' id="origine">
        <input type="text" class="form-control"  name='ingredient[]'  multiple="multiple" required>
        <input type="text" class= "form-control" name='quantite[]'  multiple="multiple" required>
        <select class='form-control'  name="unite[]" multiple="multiple"  required>
            @foreach ($unites as $unite)
            <option value="{{$unite->id}}"> {{$unite->nom_unite}} </option>
            @endforeach
        </select>
    </div>
      

        <div class='form-group'>
        <input type="button" value="Ajouter un ingrédient" onClick="ajoute() " />
        </div>
    </div>

        <div class='form-group'>
            <label><p>Temps de préparation en minutes</p></label>
            <input type="text" class="form-control" @error('temps_preparation_recette') is-invalid @enderror value="{{ old('temps_preparation_recette') }}" name="temps_preparation_recette" required>
            @error('temps_preparation_recette')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class='form-group'>
            <label><p>Temps de cuisson en minutes</p></label>
            <input type="text" class="form-control" @error('temps_cuisson_recette') is-invalid @enderror value="{{ old('temps_cuisson_recette') }}" name="temps_cuisson_recette" required>
            @error('temps_cuisson_recette')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class='form-group'>
            <label><p>Difficulte recette</p></label>
            <select class="form-control" value="{{ old('difficulte_recette') }}" name="difficulte_recette" required>
                <option value="1">1-Facile</option>
                <option value="2">2-Moyen</option>
                <option value="3">3-Expert</option>
            </select>
        </div>

        <div class='form-group'>
            <label><p>Appetance recette</p></label>
            <select class="form-control" value="{{ old('appetance_recette') }}" name="appetance_recette" required>
                    <option value="1">1-Entomophage Débutant</option>
                    <option value="2">2-Entomophage Moyen</option>
                    <option value="3">3-Entomophage Confirmé</option>
            </select>
        </div>

        <div class='form-group'>
            <label><p>Nombre de parts</p></label>
            <input type="text" class="form-control" @error('portion_recette') is-invalid @enderror value="{{ old('portion_recette') }}" name="portion_recette" required>
            @error('portion_recette')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class='form-group'>
            <label><h3>Déroulé</h3></label>
            <div class="YSeditor">
            <textarea rows="20" cols="100" class="form-control" @error('deroule_recette') is-invalid @enderror name="deroule_recette" required>{{ old('deroule_recette') }}</textarea>
            </div>

            @error('deroule_recette')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" id='submit' value='Enregistrer' >

    </form>
</div>

<script type="text/javascript" " charset="utf-8">
function ajoute()
{

var div = document.querySelector('#origine');

var newDiv = div.cloneNode(true);
newDiv.id = '';
newDiv.value ='';

 document.querySelector('#ing').appendChild(newDiv);

}
</script>

@endsection
