@extends('../layouts/backlayout')
@section('content')

<div id='backmembres' class='content'>

    <div class='intit'>
        <h1>Gestion des membres </h1>
    <a href="{{route('membre.create')}}"><h2>Ajouter un membre</h2></a>
    </div>

@if (session('status'))
    <div class="alert {{ session('alert-class') }}" role="alert">
        {{ session('status') }}
    </div>
@endif

@if ($users)
    <table>
        <thead>
            <tr>
                <th>Nom du membre</th>
                <th>Email du membre</th>
                <th>Role du membre</th>
                <th>Action</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td class="align-middle"> {{$user->name}}</td>
            <td class="align-middle">{{$user->email}}</td>
            <td class="align-middle">{{$user->role}}</td>
            <td class="align-middle">
                <button><a href="{{route('membre.show',$user->id)}}" >Voir</a></button>
                <button><a href="{{route('membre.edit',$user->id)}}">Modifier</a></button>
                @if ($user->id != 1 && $user->role != "admin")
                    <form action="{{route('membre.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" >Supprimer</button>
                    </form>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

    @else
            <p>  Aucune membre enregistré ! </p>
    @endif

</div>


@endsection
