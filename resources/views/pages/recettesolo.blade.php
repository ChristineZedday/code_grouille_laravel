@extends('layouts.single')

<h1 id='titlemob'>Grouille</h1>

@section('content')
<div id='recettesview'>
    <div class='titlerecette'>
        <h2 class='title'>{{ $recette->titre_recette }}</h2>
        <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
        <h3 class='title'>Recette proposée par: {{ $recette->Auteur->name }}</h3>
    </div>

    <div class='imgsingle'>
        @if(!empty($images))
        @foreach ($images as $image)
            <img src="{{asset('/img/'.$image->chemin_image)}}"/>
        @endforeach
        @endif
    </div>

    <div class='infosingle'>
        <h4><?php echo ($recette->description_recette) ?></h4>
        <h4>Ingrédients:</h4>
            @if(!empty($ingredients))
            @foreach ($ingredients as $ingredient)

        <span>{{$ingredient->nom_ingredient}}</span>
            <span>{{$ingredient->pivot->quantite}}</span>
            <span>
            <?php
            $idu = $ingredient->pivot->unite_id;
            $unite =  DB::table('unites')->where('id', $idu)->first();
            echo $unite->nom_unite;
                ?>
        @endforeach
        @endif

        <h4>Temps de préparation: <?php echo ($recette->temps_preparation_recette) ?>&nbsp; minutes</h4>
        <h4>Temps de cuisson: <?php echo ($recette->temps_cuisson_recette) ?>&nbsp; minutes</h4>
        <h4>Difficulté: <?php echo ($recette->difficulte_recette) ?></h4>
        <h4>Appétence: <?php echo ($recette->appetence_recette) ?></h4>
        <h4>Pour <?php echo ($recette->portion_recette) ?> personnes</h4>
        <p><?php echo ($recette->deroule_recette) ?></p>
    </div>

    <div class='comrecette'>
        <span>
            @if(!empty($commentaires))
            @foreach ($commentaires as $commentaire)

                <h4>{{$commentaire->Commentateur->name}}</h4>

                <p>{{$commentaire->texte}}</p>

            @endforeach
            @endif
        </span>
        <p>Vous devez être inscrit pour poster un commentaire</p>
        @auth
        <form action="{{route('commenter',[$recette->id])}}" method="POST">				@csrf
        <label for="texte">Commenter</label><input type="text" name="texte"/>
        <input type="submit" id='submit' value='poster' >
        </form>
        @endauth
    </div>
</div>
@endsection
