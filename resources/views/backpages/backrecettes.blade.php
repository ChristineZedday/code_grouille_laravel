@extends('layouts.back')
@section('content')
@if (session('status'))
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert {{ session('alert-class') }}" role="alert">
				{{ session('status') }}
			</div>
        </div>
    </div>
    @endif

            <a href="{{route('recette.create')}}" > Ajouter une recette</a>
        </div>
    </div>

    <section id='recettes' class='content'>
    <h1>Gestion des recettes </h1>
    @if ($recettes)
    <table >
                    <thead >
                        <tr>
                            <th>Titre de la recette</th>
                            <th>Temps de préparation</th>
                            <th>Temps de cuisson</th>
                            <th>Auteur</th>

                        </tr>

                    </thead>
                    <tbody>
      @foreach ($recettes as $recette)



                    <tr>
                                <td class="align-middle"> {{ $recette->titre_recette}}</td>
                                <td class="align-middle">{{$recette->temps_preparation_recette}}</td>
                                <td class="align-middle">{{$recette->temps_cuisson_recette}}</td>
                                <td class="align-middle">{{$user->user_id}}</td>
                                <td  class="align-middle"> <a href="{{route('recette.show',$recette->id)}}" >Voir</a>
                                    <a href="{{route('recette.edit',$recette->id)}}">Modifier</a>
                                 <form action="@isset($recette){{route('recette.destroy', $recette->id)}}@endisset" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirmation()" >
                                    Supprimer</button></td></form>


                    </tr>

        @endforeach
        </tbody>
                        </table>

    @else
              <P>  Aucune recette enregistrée ! </P>
    @endif

    </section>
    </div>
    </div>
@endsection


<script type="text/javascript">
function confirmation()
{
var message = confirm('Voulez-vous vraiment supprimer l\'insecte n°: '.{{$insecte->id}}.'?');
if (message)
{

}
}

</script>
