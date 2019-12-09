@extends('../layouts/backlayout')

@section('content')




<section id='mentionsback' class='content'>

    <div class='intit'>
        <h1>Mise à jour des Mentions Légales du site </h1>

    </div>

    @if (session('status'))
<div class="alert {{ session('alert-class') }}" role="alert">
    {{ session('status') }}
</div>
@endif

@if ($mentions)
<table >
    <thead >
        <tr>
            <th>Mentions légales</th>
            <th>Date de la dernière mise à jour</th>
            <th>Action</th>
        </tr>
    </thead>
<tbody>
@foreach ($mentions as $mention)
    <tr>
        <td class="align-middle"> {{ $mention->texte_mentions }}</td>

        <td class="align-middle"> {{  date('d/m/Y', strtotime($mention->updated_at)) }}</td>

        <td  class="align-middle">
        <button><a href="{{route('mention.edit',$mention->id)}}">Modifier</a></button>

    </tr>
 @endforeach
</tbody>
</table>

<p></p>
@endif
</section>

@endsection

