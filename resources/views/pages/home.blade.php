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
            <h3 class='subarticle'>titre 1</h3>
            {{-- <p>{{$lastactu->texte}} </p> --}}
            <a hre=''>Read more</a>
        </div>
    </article>

    <article>
        <h2 class='titleleft'>Actu home 2</h2>
        <img class='lineright' src="../img/picto/line.png"/>
           <div class='articleb'>
            <h3 class='subarticle'>Titre Article</h3>
            <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
            <a hre=''>Read more</a>
        </div>
        <img class='imgarticle' src="../img/img3.jpg"/>
    </article>

    <div id='recettes'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>Actu home 3</h2>

        <div id='suggestions'>
                <div class='recettehome'>
                    <img class='imgrecette' src="../img/sugg2.jpg"/>
                    <h3 class='subarticle'>Titre Article</h3>
                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.  </p>
                    <a href=''>Read more</a>
                </div>
                <div class='recettehome'>
                    <img class='imgrecette' src="../img/sugg3.jpg"/>
                    <h3 class='subarticle'>Titre Article</h3>
                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.  </p>
                    <a href=''>Read more</a>
                </div>

                <div class='recettehome'>
                    <img class='imgrecette' src="../img/sugg4.jpg"/>
                    <h3 class='subarticle'>Titre Article</h3>
                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.  </p>
                    <a href=''>Read more</a>
                </div>
    </div>
</div>
</div>
@endsection
