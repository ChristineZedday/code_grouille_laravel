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
        <img class='imgarticle' src="{{asset('/img/LuluGerzillon-AlliasPascaleLaCigale.jpg')}}"/>
        <div class='article'>
        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
        <h2 class='title'>Edito</h2>        
            <h3 class='subarticle'>{{ $editoactu->titre_actu }}</h3>
            <p>{{ $editoactu->texte_actu }} </p>
            <br/>
            <a class='linkpage' href='{{route('apropos')}}'>Découvrir notre asso</a>           
        </div>
       
    </article>
    <article>                  
        <div class='article'>
        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
        <h2 class='title'>Dernière actu</h2>    
            <h3 class='subarticle'>{{ $lastactu->titre_actu }}</h3>
            <p>{{ $lastactu->texte_actu }} </p>
            <br/>
            <a class='linkpage' href='{{'actus'}}'>Voir d'autres actus</a>
        </div>
        <img class='imgarticle' src="{{asset('/img/actu_grouille_insecte-au-chocolat-noel-9c0354.jpg')}}"/>
    </article>

    <div id='recettes'>
        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
        <h2 class='title'>Nos dernières recettes</h2>
        <div id='suggestions'>
            @foreach($lastrecettes as $lastrecette)
                    <div class='recettehome'>
                        <h3 class='subarticle'>{{ $lastrecette->titre_recette }}</h3>
                            <img class='imgrecette' src="{{asset('/img/sugg2.jpg')}}"/>
                            <p class='subarticle'>{{ $lastrecette->description_recette }}</p>
                            <a class='linkrecette' href='{{route('recette.show',$lastrecette->id)}}'>Consulter cette recette</a>
                        </div>
            @endforeach
        </div>
        <a class='linkpage' href="{{route('recettes')}}">Voir d'autres recettes</a>
    </div>

</div>

@endsection
