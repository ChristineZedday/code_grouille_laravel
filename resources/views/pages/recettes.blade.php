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

@foreach($recettes as $recette)
    <div class='recetteline'>
        @auth
            @if (Auth::user()->hasBookmark($recette->id))
                <a id="addbookmark" class="full" href="{{route('remove-bookmarks', $recette->id)}}" title="bookmark this page"></a>
            @else
                <a id="addbookmark" class="empty" href="{{route('add-bookmarks', $recette->id)}}" title="bookmark this page"></a>
            @endif
        @else
            <a id="addbookmark" class="empty" href="" title="bookmark this page"></a>
        @endauth

        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>

        <div id='recettedescr'>
               <div>
               <a href="{{route('recette.show',$recette->id)}}">
                <h2 class='title'>{{ $recette->titre_recette }}</h2>
               </a>
               <p><?php echo ($recette->description_recette);?></p>
               </div>

            <div>
            <?php $image = $recette->Image()->get()->first(); ?>
            @isset($image)
            <img class='imgarticle' src="{{asset('/img/'.$image->chemin_image)}}"/>
            @endisset
            </div>
    </div>
@endforeach

</div>

@endsection
