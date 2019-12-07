@extends('../layouts/backlayout')

@section('content')




<section id='actusback' class='content'>

    <div class='intit'>
        <h1>Gestion des Actualités </h1>
        <a href="{{route('actu.create')}}"><h2>Ajouter une actualité</h2></a>
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
            <th>Titre de l'actualité</th>
            <th>Résumé de l'actualité</th>
            <th>Actions</th>
        </tr>
    </thead>
<tbody>
@foreach ($actus as $actu)
    <tr>
        <td class="align-middle"> {{ $actu->titre_actu }}</td>
        <td class="align-middle"><?php echo ($actu->resume_actu) ?></td>

        <td  class="align-middle">
        <button><a href="{{route('actu.show',$actu->id)}}" >Voir</a></button>
        <button><a href="{{route('actu.edit',$actu->id)}}">Modifier</a></button>
        <form action="@isset($actu){{route('actu.destroy', $actu->id)}}@endisset" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button></td>
        </form>
    </tr>
 @endforeach
</tbody>
</table>

@else
<p>  Aucune actu enregistrée! </p>
@endif
</section>
@endsection

