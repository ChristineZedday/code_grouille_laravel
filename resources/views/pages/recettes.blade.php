@extends('layouts.default')

<h1 id='titlemob'>Grouille</h1>

@section('background')

<div id='recettesintro'>
    <h2 class='titreintro'>A table !</h2>
    <h3 class='introsub'>...Surprenez vos amis</h3>
</div>

@endsection

@section('content')


    @foreach($recettes as $recettes)
    <article>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>{{ $recettes->titre_recette }}</h2>
        <p><?php echo ($recettes->description_recette) ?></p>
        <img class='imgarticle' src="{{ $recettes->img_recette }}"/>
        <div class='article'>
            <h4 class='subarticle'><?php echo ($recettes->description_recette) ?></h4>
            <h4 class='subarticle'><?php echo ($recettes->temps_preparation_recette) ?></h4>
            <h4 class='subarticle'><?php echo ($recettes->temps_cuisson_recette) ?></h4>
            <h4 class='subarticle'><?php echo ($recettes->difficulte_recette) ?></h4>
            <h4 class='subarticle'><?php echo ($recettes->appetence_recette) ?></h4>
            <h4 class='subarticle'><?php echo ($recettes->portion_recette) ?></h4>
            <p><?php echo ($recettes->deroule_recette) ?></p>
            <a href=''>Read more</a>
        </div>
    </article>

    </table>
    @endforeach

@endsection
