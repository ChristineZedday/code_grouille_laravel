@extends('layouts.member')

<h1 id='titlemob'>Grouille</h1>

@section('content')

    @foreach($commentaires as $commentaire)

        <div class='recetteline'>
            <img class='lineleft' src="{{asset('/img/picto/line.png')}}"/>
            
                <h2 class='title'>Mes commentaires</h2>
           
            <a href="{{route('recette.show',$commentaire->Recette->id)}}">
            <h4>A propos de la recette :{{$commentaire->Recette->titre_recette}}</h4>
            </a><br/>
            <p>{!!$commentaire->texte!!}</p>
            
        </div>

    @endforeach

@endsection
