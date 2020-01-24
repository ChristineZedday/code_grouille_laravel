@extends('layouts.single')

<h1 id='titlemob'>Grouille</h1>

@section('content')
    <section id='insectesview'>
            <div class='imgsingle'>
                @isset($images)
                @foreach ($images as $image)
                    <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
                @endforeach
            </div>
            <div class='infosingle'>
                <h2>{{$insecte->nom_insecte}}</h2>
                <h3>{{$insecte->nom_latin_insecte}}&nbsp;{{$insecte->ordre_insecte}}</h3>
                <img class='lineright' src="{{asset('/img/picto/line.png')}}"/>
                <p>{!!$insecte->description_insecte!!}</p>
                <br/>
                <a class='linkpage' href="{{route('recette.insecte', $insecte->id)}}">Recettes avec cet insecte</a>
            </div>
        @endisset
    </section>
@endsection
