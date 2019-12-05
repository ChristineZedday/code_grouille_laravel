@extends('../layouts/backlayout')
@section('content')
    <section id='showrecette'>
        <h2>{{$recette->titre_recette}}</h2>

        <h3>Recette postée par : {{$recette->user->name}}</h3>

        <h3>Description</h3>
            <p>{{$recette->description_recette}}</p>

        <h4>Temps de préparation</h4>
            <p>{{$recette->temps_preparation_recette}} minutes </p>

        <h4>Temps de cuisson</h4>
            <p>{{$recette->temps_cuisson_recette}} minutes</p>

        <h4>Nombre de parts</h4>
            <p>{{$recette->portion_recette}} minutes</p>

        <h4>Difficulté</h4>
            <p>{{$recette->difficulte_recette}}</p>

        <h4>Appétance</h4>
            <p>{{$recette->appetence_recette}}</p>
            
        <h4>Déroulé</h4>
            <p>{{$recette->deroule_recette}}</p>  
    </section>

@endsection
