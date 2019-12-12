@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='intro'>
    <h2 class='titreintro'>Miam !</h2>
    <h3 class='introsub'>Bienvenue chez les entomophages.</h3>
</div>

@endsection

@section('content')

<div class='home'>
    <article>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>Dernière actu</h2>
        <img class='imgarticle' src="../img/img1.jpg"/>
        <div class='article'>
            <h3 class='subarticle'>{{ $lastactu->titre_actu }}</h3>
            <p>{{ $lastactu->texte_actu }} </p>

            <br/>


            <a href='{{'actus'}}'>Voir d'autres actus</a>

        </div>

    </article>

    <div id='recettes'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>Nos dernières recettes</h2>
        @foreach($lastrecettes as $lastrecettes)
            <h3 class='subarticle'>{{ $lastrecettes->titre_recette }}</h3>
            <div id='suggestions'>
                    <div class='recettehome'>
                        <img class='imgrecette' src="../img/sugg2.jpg"/>
                        <p class='subarticle'>{{ $lastrecettes->description_recette }}</p>

                        <a href='{{'recette'}}'>Consulter cette recette</a>
                    </div>
            </div>
        @endforeach

        <a href='{{'recettes'}}'>Voir d'autres recettes</a>
    </div>

</div>

@endsection
