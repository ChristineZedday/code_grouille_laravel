@extends('layouts.default')
@section('content')
    <section id='recettes'>



            <h3>{{$recette->titre_recette}}</h3>
            <p>{{$recette->temps_preparation_recette}}&nbsp;{{$recette->temps_cuisson_recette}}</p>

            <p>{{$recette->difficulte_recette}}</p>
            <p>{{$recette->appetence_recette}}</p>
            <p>{{$user->user_id}}</p>

@stop
