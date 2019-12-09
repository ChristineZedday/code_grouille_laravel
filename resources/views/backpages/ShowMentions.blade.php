@extends('layouts.default')
@section('content')
    <section id='showmentions'>
            <p><?php echo($mentions->texte_mentions) ?></p>
    </section>
@endsection