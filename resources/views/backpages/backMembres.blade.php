@extends('../layouts/backlayout')
@section('content')

<section id='backmembres' class='content'>

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
                    <form action="@isset($user){{route('membre.destroy', $user->id)}}@endisset" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="confirmation()">Supprimer</button>
                    </form>
            </td>    
        </tr>
    @endforeach
    </tbody>
</table>

    @else
            <p>  Aucune membre enregistré ! </p>
    @endif

    </section>


@endsection

<script type="text/javascript">
function confirmation()
{
var message = confirm('Voulez-vous vraiment supprimer le membre '.{{$user->name_user}}.'?');
if (message)
{

}
}
</script>
