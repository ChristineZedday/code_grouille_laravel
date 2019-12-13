@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='recettesintro'>
    <h2 class='titreintro'>A table !</h2>
    <h3 class='introsub'>...Surprenez vos amis</h3>
</div>

@endsection

@section('content')

<div id='recetteliste'>

@foreach($recettes as $recettes)
    <div class='recetteline'>
        <a id="addbookmark" class="empty" href="{{route('bookmarks',$bookmarks->id)}}" rel="sidebar" title="bookmark this page"></a>
        <img class='lineleft' src="../img/picto/line.png"/>
        <a href="{{route('recette.show',$recettes->id)}}">
            <h2 class='title'>{{ $recettes->titre_recette }}</h2>
        </a>
        <p><?php echo ($recettes->description_recette) ?></p>
        <img class='imgarticle' src="{{ $recettes->img_recette }}"/>
    </div>
@endforeach

</div>

@endsection
