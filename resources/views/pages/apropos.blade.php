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
            <img class='imgarticle' src="{{asset('/img/apropos_une.jpg')}}"/>
                <div class='article'>
                <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
                <h2 class='subarticle'>{!! $apropospara1->titre!!}</h2>
                <p>{!! $apropospara1->texte!!} </p>
            </div>
        </article>

        <article>
            <img class='imgarticle' src="{{asset('/img/apropos_autre.jpg')}}"/>
            <div class='article'>
                <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
                <h2 class='subarticle'>{!! $apropospara2->titre !!}</h2>
                <p>{!! $apropospara2->texte !!} </p>
            </div>
        </article>

    <section>

@endsection





