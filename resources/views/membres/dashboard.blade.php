@extends('layouts.member')

@section('content')
@if( Auth::user())
<h2 class='welcomedash'>Bienvenue {{ Auth::user()->name }} !</h2>
@endif

<div class='grid'>
    <a class='linkdash' href="{{route('recette.form')}}"><img class='dashpict' src='./img/picto/arrow.png'/><h3>Poster une recette</h3></a>
    <a class='linkdash' href="{{route('/favoris')}}"><img class='dashpict' src='./img/picto/star.png'/><h3>Accéder aux favoris</h3></a>
    <a class='linkdash' href="{{route('/comment')}}"><img class='dashpict' src='./img/picto/bulle.png'/><h3>Voir mes commentaires</h3></a>
</div>

@endsection
