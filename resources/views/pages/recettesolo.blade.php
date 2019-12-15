@extends('layouts.single')

<h1 id='titlemob'>Grouille</h1>

@section('content')
<article>
    <div class='intitsinglerecette'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>{{ $recette->titre_recette }}</h2>

    </div>

    <div class='imgsinglerecette'>
        @if(!empty($images))
        @foreach ($images as $image)
            <img src="{{asset('/img/'.$image->chemin_image)}}"/>
        @endforeach
        @endif
    </div>

    <div class='article'>
        <h4 class='subarticle'><?php echo ($recette->description_recette) ?></h4>
        <h4 class='subarticle'>Ingrédients:</h4>
        <div class='ingredients'>
       
            @if(!empty($ingredients))
            @foreach ($ingredients as $ingredient)
           
         <div>       <span>{{$ingredient->nom_ingredient}}</span>
                <span>{{$ingredient->pivot->quantite}}</span>
                <span>
                <?php 
                $idu = $ingredient->pivot->unite_id;
                $unite =  DB::table('unites')->where('id', $idu)->first();
                echo $unite->nom_unite;
                 ?>
               </span>
          </div>      
            @endforeach
            @endif
        </div><br/>

        <h4 class='subarticle'>Temps de préparation: <?php echo ($recette->temps_preparation_recette) ?>&nbsp; minutes</h4>
        <h4 class='subarticle'>Temps de cuisson: <?php echo ($recette->temps_cuisson_recette) ?>&nbsp; minutes</h4>
        <h4 class='subarticle'>Difficulté: <?php echo ($recette->difficulte_recette) ?></h4>
        <h4 class='subarticle'>Appétence: <?php echo ($recette->appetence_recette) ?></h4>
        <h4 class='subarticle'>Pour <?php echo ($recette->portion_recette) ?> personnes</h4>
        <p><?php echo ($recette->deroule_recette) ?></p>
    </div>

    <div class='comrecette'>
            @if(!empty($commentaires))
            @foreach ($commentaires as $commentaire)
          
                <h4>{{$commentaire->User->name}}</h4>
              
                <p>{{$commentaire->texte}}</p>
               
            @endforeach
            @endif
        </div>
        <p>Vous devez être inscrit pour poster un commentaire</p>
        @auth
       
        <form action="{{route('commenter',[$recette->id])}}" method="POST">
						@csrf
        <label for="texte">Commenter</label><input type="text" name="texte"/>
        <input type="submit" id='submit' value='poster' >
        </form>
        @endauth
</article>
@endsection
