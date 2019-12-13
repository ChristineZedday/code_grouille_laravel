@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='actusintro'>
    <h2 class='titreintro'>Action, réaction</h2>
    <h3 class='introsub'>La lutte continue</h3>
</div>

@endsection

@section('content')


    @foreach($bookmarks as $bookmarks)

    @foreach($recettes as $recettes)
    <div class='recetteline'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <a href="{{route('recette.show',$recettes->id)}}">
            <h2 class='title'>{{ $recettes->titre_recette }}</h2>
        </a>
        <p><?php echo ($recettes->description_recette) ?></p>
        <img class='imgarticle' src="{{ $recettes->img_recette }}"/>
    </div>
    @endforeach

    @endforeach

@endsection
