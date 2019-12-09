@extends('../layouts/backlayout')

@section('content')




<section id='actusback' class='content'>

    <div class='intit'>
        <h1>Gestion des Commentaires </h1>
        <a href="{{route('commentaire.create')}}"><h2>Ajouter un commentaire</h2></a>
    </div>

@if (session('status'))
<div class="alert {{ session('alert-class') }}" role="alert">
    {{ session('status') }}
</div>
@endif

@if ($actus)
<table >
    <thead >
        <tr>
            <th>Commentaire</th>
            <th>Recette</th>
            <th>Auteur</th>
            <th>Date</th>
            <th>Action</th>
        </tr>


    </thead>
<tbody>
@foreach ($commentaires_recettes as $commentaires_recette)
    <tr>
        <td class="align-middle"> {{ $commentaires_recette->texte }}</td>
        <td class="align-middle"> {{ $recettes->titre_recette }}</td>
        <td class="align-middle"> {{ $users->name }}</td>
        <td class="align-middle"> {{  date('d/m/Y', strtotime($mention->created_at)) }}</td>
        <td  class="align-middle">
        <button><a href="{{route('commentaire.show',$commentaires_recette->id)}}" >Voir</a></button>
        <button><a href="{{route('commentaire.edit',$commentaires_recette->id)}}">Modifier</a></button>
        <form action="@isset($actu){{route('commentaire.destroy', $commentaires_recette->id)}}@endisset" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button></td>
        </form>
    </tr>
 @endforeach
</tbody>
</table>

@else
<p> Aucun commentaire </p>
@endif
</section>
@endsection

