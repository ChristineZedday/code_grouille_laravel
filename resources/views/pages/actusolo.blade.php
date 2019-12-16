@extends('layouts.single')


@section('content')
<h1 id='titlemob'>Grouille</h1>

<article>
        <h3>{{$actu->titre_actu}}</h3>
        <p><?php echo($actu->resume_actu) ?></p>
        @isset($images)
            @foreach ($images as $image)
                <img src="{{URL::asset('/img/'.$image->chemin_image)}}"/>
            @endforeach
        @endisset
        <h4>texte</h4>
        <p><?php echo($actu->texte_actu) ?></p>
</article>

@ensection
