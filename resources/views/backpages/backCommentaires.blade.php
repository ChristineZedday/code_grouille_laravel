@extends('../layouts/backlayout')

@section('content')

<div id='commentairesback' class='content'>

    <div class='intit'>
        <h1>Gestion des Commentaires </h1>
    </div>

@if (session('status'))
    <div class="alert {{ session('alert-class') }}" role="alert">
        {{ session('status') }}
    </div>
@endif

        @if ($commentaires)
            <table >
                <thead >
                    <tr>
                        <th>Commentaire</th>
                        <th>Recette</th>
                        <th>Auteur</th>
                        <th>Date d'enregistrement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($commentaires as $commentaire_recette)
                    <tr>
                        <td class="align-middle"> {{ $commentaire_recette->texte }}</td>
                        <td class="align-middle"> {{ $commentaire_recette->recette->titre_recette }}</td>
                        <td class="align-middle"> {{ $commentaire_recette->user->name }}</td>
                        <td class="align-middle"> {{  date('d/m/Y', strtotime($commentaire_recette->created_at)) }}</td>
                        <td  class="align-middle">
                        <button><a href="{{route('commentaire.edit',$commentaire_recette->id)}}">Modifier</a></button>
                        <form action="{{route('commentaire.destroy', $commentaire_recette->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" method="POST">Supprimer</button></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
        </div>
@endsection

