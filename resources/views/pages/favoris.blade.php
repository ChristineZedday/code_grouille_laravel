@extends('layouts.member')

<h1 id='titlemob'>Grouille</h1>

@section('content')

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

@endsection
