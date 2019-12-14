@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='apropos'>
    <h2 class='titreintro'>Notre asso</h2>
    <br/>
    <h2 class='introsub'>"Aime" les insectes</h2>
</div>

@endsection

@section('content')


    <section id='about'>
                <article>
                     <img class='imgarticle' src="../img/apropos-d0e5791126f8bf9de4a7c90d6ef9c19d.jpg"/>
                     <div>
                        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
                        <h2 class='title'>Qui sommes-nous</h2>
                        </div>
                     <img class='imgarticle' src="../img/about2.jpg"/>
                     <div class='article'>
                        <h3 class='subarticle'>{{ $apropospara1->titre }}</h3>
                        <p>{{ $apropospara1->texte }} </p>
                        
                    </div>
                </article>
    <section>

@endsection





