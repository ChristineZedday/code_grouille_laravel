@extends('layouts.default')
@section('content')
    <section id='ingredients'>




            <p>@isset($ingredient->insecte){{$ingredient->insecte->nom_insecte }}@else&nbsp;@endisset</p>

            <p>{{$ingredient->nom_ingredient}}</p>

@stop
