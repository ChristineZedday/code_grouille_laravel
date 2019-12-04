@extends('layouts.default')
@section('content')
    <section id='ingredients'>




            <p>@isset($ingredient->id_insecte){{ }}@else&nbsp;@endisset</p>

            <p>{{$ingredient->nom_ingredient}}</p>

@stop
