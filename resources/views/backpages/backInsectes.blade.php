@extends('../layouts/backlayout')

@section('content')

<div id='insectesback' class='content'>

    <div class='intit'>
        <h1>Gestion des insectes </h1>
        <a href="{{route('insecte.create')}}"><h2>Ajouter un insecte</h2></a>
    </div>

@if (session('status'))
<div class="alert {{ session('alert-class') }}" role="alert">
    {{ session('status') }}
</div>
@endif

@if ($insectes)
<table >
    <thead >
        <tr>
            <th>Nom de l'insecte</th>
            <th>Nom latin</th>
            <th>Ordre</th>
            <th>Actions</th>
        </tr>
    </thead>
<tbody>
@foreach ($insectes as $insecte)
    <tr>
        <td class="align-middle"> {{ $insecte->nom_insecte }}</td>
        <td class="align-middle">{{$insecte->nom_latin_insecte}}</td>
        <td class="align-middle">{{$insecte->ordre_insecte}}</td>
        <td  class="align-middle">
        <a href="{{route('insecte.show',$insecte->id)}}" ><button>Voir</button></a>
        <a href="{{route('insecte.edit',$insecte->id)}}"><button>Modifier</button></a>
        <form action="{{route('insecte.destroy', $insecte->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="confirmation()">Supprimer</button></td>
        </form>
    </tr>
 @endforeach
</tbody>
</table>

@else
<p>  Aucun insecte enregistré! </p>
@endif
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
