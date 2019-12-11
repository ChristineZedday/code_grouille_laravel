@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='apropos'>
    <h2 class='titreintro'>Hello you</h2>
    <h3 class='introsub'>Rencontrez notre équipe</h3>
</div>

@endsection

@section('content')

    <section id='about'>
                <article>
                     <img class='imgarticle' src="../img/about.jpg"/>
                     <div>
                        <img class='lineleft' src="../img/picto/line.png"/>
                        <h2 class='title'>Qui sommes-nous</h2>
                        </div>
                     <img class='imgarticle' src="../img/about2.jpg"/>
                     <div class='article'>
                        <h3 class='subarticle'>{{ $apropospara1->titre }}</h3>
                        <p>{{ $apropospara1->texte }} </p>
                        <a href=''>Read more</a>
                    </div>
                </article>
    <section>

@endsection





