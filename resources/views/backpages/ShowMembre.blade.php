@extends('../layouts/backlayout')
@section('content')

<section id='showmembre' class='content'>

    <div class='intit'>
        <h1>Fiche Membre</h1>
    </div>

    <table>
        <th>Nom du membre</th>
        <th>Email du membre</th>
        <th>Role du membre</th>
        <th>Date d'inscription</th>

    <h2>Nom : </h2>
    <p>{{$user->name}}</p>

    <h2>Email : </h2> 
    <p>{{$user->email}}</p>

    <h2>Rôle : </h2>{{$user->role}}
    <p><p>

    <h2>Date d'inscription : </h2>
    <p>{{$user->created_at}}</p>
    

</section>

@endsection
    