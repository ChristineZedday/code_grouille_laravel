@extends('layouts.default')
@section('content')
    <section id='actus'>
            <h3>{{$actu->titre_actu}}</h3>
            <h4>résumé</h4>
            <p><?php echo($actu->resume_actu) ?></p>
            @isset($images)
                @foreach ($images as $image)
                    <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
                @endforeach
            @endisset
            <h4>texte</h4>
            <p><?php echo($actu->texte_actu) ?></p>
    </section>
@endsection


<div class='intitsinglerecette'>
        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
        <h2 class='title'>{{ $actu->titre_actu }}</h2>
    </div>

    <div class='imgsinglerecette'>
        @isset($images)
        @foreach ($images as $image)
            <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
        @endforeach
    </div>

    <div class='article'>
        <h3 class='subarticle'><?php echo ($actus->resume_actu) ?></h3>
        <p><?php echo ($actu->texte_actu) ?></p>
    </div>
