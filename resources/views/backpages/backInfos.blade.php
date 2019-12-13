@extends('../layouts/backlayout')

@section('content')

<div id='infosback' class='content'>

    <div class='intit'>
        <h1>Gestion des Infos </h1>

    </div>

@if (session('status'))
<div class="alert {{ session('alert-class') }}" role="alert">
    {{ session('status') }}
</div>
@endif

<table >
    <thead >
        <tr>
            <th>Titre</th>
            <th>Texte</th>
            <th>E-mail</th>
            <th>Date d'enregistrement</th>
            <th>Action</th>
        </tr>


    </thead>
<tbody>
@foreach ($infos as $info)
    <tr>
        <td class="align-middle"> {{ $info->titre }}</td>
        <td class="align-middle"> {{ $info->texte }}</td>
        <td class="align-middle"> {{ $info->email }}</td>
        <td class="align-middle"> {{  date('d/m/Y', strtotime($info->created_at)) }}</td>
        <td  class="align-middle">
        <button><a href="{{route('info.edit',$info->id)}}">Modifier</a></button>
    </tr>
 @endforeach
</tbody>
</table>


</div>
@endsection

