@extends('../layouts/backlayout')

@section('content')

<div id='imagesback' class='content'>

    <div class='intit'>
        <h1>Gestion des images </h1>
        <a href="{{route('image.create')}}"><h2>Ajouter une image</h2></a>
    </div>

@if (session('status'))
<div class="alert {{ session('alert-class') }}" role="alert">
    {{ session('status') }}
</div>
@endif

@if (!empty($images))
<table >
    <thead >
        <tr>
            <th>Nom de l'image</th>
            <th>Dossier</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
<tbody>
@foreach ($images as $image)
    <tr>
        <td class="align-middle"> {{ $image->chemin_image }}</td>
        <td class="align-middle">public/img/</td>
        <td class="align-middle"><img src="{{asset('/img/'.$image->chemin_image)}}" style="width:150px"></td>
        <td  class="align-middle">
      
        <form action="{{route('image.destroy', $image->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="confirmation()">Supprimer</button></td>
        </form>
    </tr>
 @endforeach
</tbody>
</table>

@else
<p>  Aucune image enregistrée! </p>
@endif
</div>
@endsection


