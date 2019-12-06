@extends('../layouts/backlayout')
@section('content')

<section id='showmembre' class='content'>


    <h2>Nom : </h2>
    <p>{{$user->name}}</p>

    <h2>Email : </h2> 
    <p>{{$user->email}}</p>

    <h2>Rôle : </h2>{{$user->role}}
    <p><p>

    <h2>Date d'inscription : </h2>
    <p>{{  date('d/m/Y', strtotime($user->created_at)) }}</p>
    

</section>

@endsection
    