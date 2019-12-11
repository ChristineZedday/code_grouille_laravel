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
