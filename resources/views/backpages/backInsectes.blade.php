@extends('layouts.default')
@section('content')
    <section id='insectes'>
    @if ($insectes)
    @foreach($insectes as $insecte)
        <figure>
            <img src="../img/1.png"/>
            <h3>{{$insecte->nom_insecte}}</h3>
            <h4>{{$insecte->nom_latin_insecte}}&nbsp;&nbsp;{{$insecte->ordre_insecte}}</h4>
            <p>{{$insecte->description_insecte}}</p>
        <figure>
    @endforeach
    @endif    

    </section>
@stop
