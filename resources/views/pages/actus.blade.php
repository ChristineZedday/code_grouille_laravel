@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='actusintro'>
    <h2 class='titreintro'>Action, réaction</h2>
    <h3 class='introsub'>La lutte continue</h3>
</div>

@endsection

@section('content')


    @foreach($actus as $actus)
    <article>
        <img class='lineleft'src="{{asset('/img/picto/line.png')}}"/>
        <h2 class='title'>{{ $actus->titre_actu }}</h2>
        @foreach ($actus->Image as $image)
        <img class='imgarticle' src="{{ $image->chemin_image}}"/>
        @endforeach
        <div class='article'>
            <h3 class='subarticle'><?php echo ($actus->resume_actu) ?></h3>
            <p><?php echo ($actus->texte_actu) ?></p>
            <a href={{('actu.show')}}>Lire la suite</a>
        </div>
    </article>
    @endforeach

@endsection
