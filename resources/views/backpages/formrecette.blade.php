@extends('/layouts/backlayout')
@section('content')


<div class="backform" class='content'>
    <form enctype="multipart/form-data" action="@isset($recette){{route('recette.update', $recette->id)}}@else{{route('recette.store')}}@endisset" method="POST">
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



        <div class='form-group' id="ing">
        <label><h4>Ingrédients de la recette</h4></label>
        @isset($recette)

            @foreach ($ingrecettes as $ingrecette)
            <div class='ingredients'>
            <span class="ingredient">{{$ingrecette->nom_ingredient}}</span>
            <span class="quantite">{{$ingrecette->pivot->quantite}}</span>
            <span>   <?php
            $idu = $ingrecette->pivot->unite_id;

            $unite =  DB::table('unites')->where('id', $idu)->first();

            echo $unite->nom_unite;
               ?></span>
            <input type="checkbox" name="{{'suppring'.$ingrecette->id}}" id="suppring"/>  <label for="suppring">Supprimer l'ingrédient {{$ingrecette->id}}</label>

            </div>
            @endforeach
        @else
        <div class='form-group' id="origine">
        <input type="text" class="form-control"  name='ingredient[]'  multiple="multiple" required>
        <input type="text" class= "form-control" name='quantite[]'  multiple="multiple" required>
        <select class='form-control'  name="unite_id[]" multiple="multiple"  required>
            @foreach ($unites as $unite)
            <option value="{{$unite->id}}"> {{$unite->nom_unite}} </option>
            @endforeach
        </select>

    </div>

        @endisset
        <input type="button" value="Ajouter un ingrédient" onClick="ajoute()"/>

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
                <option value="Facile">Facile</option>
                <option value="Moyen">Moyen</option>
                <option value="Expert">Expert</option>
            </select>
        </div>

        <div class='form-group'>
            <label><p>Appetence recette</p></label>
            <select class="form-control" value="@isset($recette){{$recette->appetence_recette}}@endisset" name="appetence_recette" required>
                    <option value="Entomophage Débutant">Entomophage Débutant</option>
                    <option value="Entomophage Moyen">Entomophage Moyen</option>
                    <option value="Entomophage Confirmé">Entomophage Confirmé</option>
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

        @isset($recette)
    <div>
    @foreach ($images as $image)
        <img src="{{asset('/img/'.$image->chemin_image)}}" />
        <input type="checkbox" id="suppr" name="{{'suppr'.$image->id}}" value= "{{$image->id}}" /> <label for="suppr">Supprimer l'image {{$image->id}}</label>
    @endforeach
    </div>
@endisset


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
    @isset($recette)
   var div = document.getElementById('origine');

   var newDiv = div.cloneNode(true);
   newDiv.id = '';
   newDiv.value ='';

   @else

   var newDiv = document.createElement('div');
   var newInput = document.createElement('input');
   newInput.type ="text";
   newInput.class ="form-control" ;
   newInput.name= 'ingredient[]' ;
   newInput.multiple="multiple";
   document.newDiv.appendChild(newInput);
   newInput1.type ="text";
   newInput1.class ="form-control" ;
   newInput1.name= 'quantite[]' ;
   newInput1.multiple="multiple";
   document.newDiv.appendChild(newInput1);
   newInput2.type ="select";
   newInput2.class ="form-control" ;
   newInput2.name= 'unite[]' ;
   newInput2.multiple="multiple";
        @foreach ($unites as $unite)
        newoption = document.createElement('option');
        newoption.value ="{{$unite->id}}";
        document.newInput2.appendChild(newoption);
        textnode = document.createElement('textNode');
        textNode.value ="{{$unite->nom_unite}}";
        document.newInput2.appendChild(textnode);
        @endforeach
   document.newDiv.appendChild(newInput2);


   @endisset
   document.getElementById('ing').appendChild(newDiv);

}
</script>

@endsection
