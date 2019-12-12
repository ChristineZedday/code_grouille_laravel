@extends('layouts.single')

<h1 id='titlemob'>Grouille</h1>

@section('content')
<article>
    <div class='intitsinglerecette'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>{{ $recette->titre_recette }}</h2>
        <p><?php echo ($recette->description_recette) ?></p>
    </div>

    <div class='imgsinglerecette'>
        @isset($images)
        @foreach ($images as $image)
            <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
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
</article>
@endsection
