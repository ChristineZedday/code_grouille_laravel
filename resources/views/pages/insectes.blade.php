@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='insecteintro'>
    <h2 class='titreintro'>Mais d'abord...</h2>
    <h3 class='introsub'>On se renseigne !</h3>
</div>

@endsection


@section('content')

    <section id='insectesfront'>




        @foreach($insectes as $insecte)
            <figure><a href="{{route('insecte.show',$insecte->id)}}">

                   <?php $image = $insecte->Image()->first(); ?>
            @isset($image)
            <img class='imgarticle' src="{{asset('/img/'.$image->chemin_image)}}"/>
            @endisset
               
                <h3 class='subarticle'>{{$insecte->nom_insecte}}</h3>
                <P>{{$insecte->nom_latin_insecte}}</P>
                <p>{{$insecte->ordre_insecte}}</p>
            </a></figure>
        @endforeach


        
    </section>

@endsection
