@extends('../layouts/backlayout')
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

            <a href="{{route('recette.create')}}"> Ajouter une recette</a>

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
                            <th>Nombre de personnes</th>
                        </tr>

                    </thead>
                    <tbody>
                    @foreach ($recettes as $recette)
                        <tr>
                            <td class="align-middle"> {{$recette->titre_recette}}</td>
                            <td class="align-middle">{{$recette->temps_preparation_recette}}</td>
                            <td class="align-middle">{{$recette->temps_cuisson_recette}}</td>
                            <td class="align-middle">{{$recette->user->name}}</td>
                            <td class="align-middle">{{$recette->portion_recette}}</td>


                            <td class="align-middle"> <a href="{{route('recette.show',$recette->id)}}" >Voir</a>
                            <a href="{{route('recette.edit',$recette->id)}}">Modifier</a>
                            <form action="@isset($recette){{route('recette.destroy', $recette->id)}}@endisset" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="confirmation()">Supprimer</button>
                            </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
            </table>

    @else
            <p>  Aucune recette enregistrée ! </p>
    @endif

    </section>


@endsection


