@extends('layouts.single')

<h1 id='titlemob'>Grouille</h1>

@foreach($actus as $actus)

<article>
    <div class='intitsinglerecette'>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>{{ $actus->titre_actu }}</h2>
    </div>

    <div class='imgsinglerecette'>
        @isset($images)
        @foreach ($images as $image)
            <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
        @endforeach
    </div>

    <div class='article'>
        <h3 class='subarticle'><?php echo ($actus->resume_actu) ?></h3>
        <p><?php echo ($actus->texte_actu) ?></p>
        <a href=''>Read more</a>
    </div>

</article>

@endforeach
