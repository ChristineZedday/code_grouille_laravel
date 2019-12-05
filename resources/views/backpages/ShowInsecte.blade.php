@extends('layouts.default')
@section('content')
    <section id='insectes'>
            <h3>{{$insecte->nom_insecte}}</h3>
            <p>{{$insecte->nom_latin_insecte}}&nbsp;{{$insecte->ordre_insecte}}</p>
            <p>{{$insecte->description_insecte}}</p>
    </section>
@endsection
