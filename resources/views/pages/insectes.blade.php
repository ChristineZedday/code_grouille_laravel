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

{{--
         <a href=''>
        <div class='imgsingle'>
            @isset($images)
            @foreach ($images as $image)
                <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
            @endforeach
        </div>
        </a> --}}


        @foreach($insectes as $insecte)
            <figure><a href="{{route('insecte.show',$insecte->id)}}">
                @php
                    $images = $insecte->Image;
                @endphp
                @isset($images)
                    @foreach ($images as $image)
                        <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
                    @endforeach
                @else
                    <img src="/img/1.png"/>
                @endisset
                <h3 class='subarticle'>{{$insecte->nom_insecte}}</h3>
                <P>{{$insecte->nom_latin_insecte}}</P>
                <p>{{$insecte->ordre_insecte}}</p>
            </a></figure>
        @endforeach


        {{-- <figure>
            <img src="../img/2.png"/>
            <h3>Insecte 1</h3>
            <p>Fuloriñ a ra peogwir ne fell ket d'ur gizennad blev reut plegañ hervez e c'hoant.</p>
        </figure>
        <figure>
            <img src="../img/3.png"/>
            <h3>Insecte 1</h3>
            <p>Fuloriñ a ra peogwir ne fell ket d'ur gizennad blev reut plegañ hervez e c'hoant.</p>
        </figure>

        <figure>
            <img src="../img/4.png"/>
            <h3>Insecte 1</h3>
            <p>Fuloriñ a ra peogwir ne fell ket d'ur gizennad blev reut plegañ hervez e c'hoant.</p>
        </figure>
        <figure>
            <img src="../img/5.png"/>
            <h3>Insecte 1</h3>
            <p>Fuloriñ a ra peogwir ne fell ket d'ur gizennad blev reut plegañ hervez e c'hoant.</p>
        </figure>
        <figure>
            <img src="../img/6.png"/>
            <h3>Insecte 1</h3>
            <p>Fuloriñ a ra peogwir ne fell ket d'ur gizennad blev reut plegañ hervez e c'hoant.</p>
        </figure> --}}

    </section>

@endsection
