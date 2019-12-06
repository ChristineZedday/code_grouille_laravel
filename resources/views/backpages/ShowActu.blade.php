@extends('layouts.default')
@section('content')
    <section id='actus'>
            <h3>{{$actu->titre_actu}}</h3>
            <h4>résumé</h4>
            <p><?php echo($actu->resume_actu) ?></p>
            <h4>texte</h4>
            <p><?php echo($actu->texte_actu) ?></p>
    </section>
@endsection
