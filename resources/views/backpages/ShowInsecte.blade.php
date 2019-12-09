@extends('layouts.default')
@section('content')
    <section id='insectes'>
            <h3>{{$insecte->nom_insecte}}</h3>
            <p>{{$insecte->nom_latin_insecte}}&nbsp;{{$insecte->ordre_insecte}}</p>
            <p><?php echo($insecte->description_insecte) ?></p>
            @isset($images)
            @foreach ($images as $image)
                <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
            @endforeach
        @endisset
    </section>
@endsection
