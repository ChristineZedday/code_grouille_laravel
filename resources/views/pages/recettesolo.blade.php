@extends('layouts.single')

<h1 id='titlemob'>Grouille</h1>

@section('content')
<article>
    <div class='intitsinglerecette'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>{{ $recette->titre_recette }}</h2>

    </div>

    <div class='imgsinglerecette'>
        @isset($images)
        @foreach ($images as $image)
            <img src="{{asset('/img/'.$image->chemin_image)}}"/>
        @endforeach
        @endisset
    </div>

    <div class='article'>
        <h4 class='subarticle'><?php echo ($recette->description_recette) ?></h4>
        <h4 class='subarticle'><?php echo ($recette->temps_preparation_recette) ?></h4>
        <h4 class='subarticle'><?php echo ($recette->temps_cuisson_recette) ?></h4>
        <h4 class='subarticle'><?php echo ($recette->difficulte_recette) ?></h4>
        <h4 class='subarticle'><?php echo ($recette->appetence_recette) ?></h4>
        <h4 class='subarticle'><?php echo ($recette->portion_recette) ?></h4>
        <p><?php echo ($recette->deroule_recette) ?></p>
    </div>

    <div class='comrecette'>
            @isset($commentaires)
            @foreach ($commentaires as $commentaire)
                <h4>{{$commentaire->user->name}}</h4>
                <p>{{$commentaire->texte}}</p>
            @endforeach
            @endisset
        </div>
</article>
@endsection
