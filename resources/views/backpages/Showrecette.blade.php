@extends('../layouts/backlayout')
@section('content')
    <section id='showrecette'>
        <div class='intit'>
            <h1>{{$recette->titre_recette}}</h1>
        </div>
        <h2>Recette postée par : {{$recette->user->name}}</h2>

        <h2>Description</h2>
            <p>{{$recette->description_recette}}</p>

        <h3>Temps de préparation</h3>
            <p>{{$recette->temps_preparation_recette}} minutes </p>

        <h3>Temps de cuisson</h3>
            <p>{{$recette->temps_cuisson_recette}} minutes</p>

        <h3>Nombre de parts</h3>
            <p>{{$recette->portion_recette}} minutes</p>

        <h3>Difficulté</h3>
            <p>{{$recette->difficulte_recette}}</p>

        <h3>Appétance</h3>
            <p>{{$recette->appetence_recette}}</p>
            
        <h3>Déroulé</h3>
            <p>{{$recette->deroule_recette}}</p>  
    </section>

@endsection
