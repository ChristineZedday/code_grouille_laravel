@extends('layouts.connect')

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
                <img class='lineright' src="/img/picto/line.png"/>
                <p><?php echo($insecte->description_insecte) ?></p>
            </div>
        @endisset
    </section>
@endsection
