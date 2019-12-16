@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='apropos'>
    <h2 class='titreintro'>Notre asso</h2>
    <br/>
    <h3 class='introsub'>"Aime" les insectes</h3>
</div>

@endsection

@section('content')


    <section id='about'>
                <article>
                    <div>
                        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
                        <h2 class='title'>Qui sommes-nous</h2>
                        <h2 class='subarticle'>{!! $apropospara1->titre!!}</h2>
                        <p>{!! $apropospara1->texte!!} </p>
                    </div>
                     <img class='imgarticle' src="{{asset('/img/apropos-d0e5791126f8bf9de4a7c90d6ef9c19d.jpg')}}"/>
                </article>
                <article>
                     <img class='imgarticle' src="{{asset('/img/apropos-asso-grouille-71f544a244c701f479f1bd16c7d19d8f.jpg')}}"/>
                     <div class='article'>
                        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
                        <h2 class='subarticle'>{!! $apropospara2->titre !!}</h2>
                        <p>{!! $apropospara2->texte !!} </p>
                    </div>
                </article>
    <section>

@endsection





