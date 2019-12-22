@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='actusintro'>
    <h2 class='titreintro'>Action, réaction</h2>
    <h3 class='introsub'>La lutte continue</h3>
</div>

@endsection

@section('content')


    @foreach($actus as $actu)
    <article>
        <img class='lineleft'src="{{asset('/img/picto/line.png')}}"/>
        <h2 class='title'>{{ $actu->titre_actu }}</h2>
        @foreach ($actu->Image as $image)
        <img class='imgarticle' src="{{ asset('/img/'.$image->chemin_image)}}"/>
        @endforeach
        <div class='article'>
            <h3 class='subarticle'><?php echo ($actu->resume_actu) ?></h3>
            <p><?php echo ($actu->texte_actu) ?></p>

        </div>
    </article>
    @endforeach

@endsection
