@extends('layouts.default')
@section('content')
    <section id='actus'>
            <h3>{{$actu->titre_actu}}</h3>
            <h4>résumé</h4>
            <p><?php echo($actu->resume_actu) ?></p>
            @isset($images)
                @foreach ($images as $image)
                    <img src="{{URL::asset('/img/'.$image->chemin_image)}}">
                @endforeach
            @endisset
            <h4>texte</h4>
            <p><?php echo($actu->texte_actu) ?></p>
    </section>
@endsection
