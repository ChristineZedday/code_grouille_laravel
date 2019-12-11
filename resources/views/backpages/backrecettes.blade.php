@extends('../layouts/backlayout')
@section('content')

<section id='recettes' class='content'>

    <div class='intit'>
          <h1>Gestion des recettes </h1>
          <a href="{{route('recette.create')}}"><h2>Ajouter une recette</h2></a>
    </div>

@if (session('status'))
    <div class="alert {{ session('alert-class') }}" role="alert">
        {{ session('status') }}
    </div>
@endif

@if ($recettes)
    <table >
        <thead >
            <tr>
                <th>Titre de la recette</th>
                <th>Temps de préparation</th>
                <th>Temps de cuisson</th>
                <th>Auteur</th>
                <th>Nombre de personnes</th>
                <th>Actions</th>
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
            <td class="align-middle">
                <button><a href="{{route('recette.show',$recette->id)}}" >Voir</a></button>
                <button><a href="{{route('recette.edit',$recette->id)}}">Modifier</a></button>
                    <form action="{{route('recette.destroy', $recette->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="confirmation()">Supprimer</button>
                    </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



    @endif

    </section>


@endsection

