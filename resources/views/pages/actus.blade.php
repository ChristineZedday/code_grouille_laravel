@extends('layouts.default')
@section('content')


    @foreach($actus as $actus)
    <article>
        <img class='lineleft' src="../img/picto/line.png"/>
        <h2 class='title'>{{ $actus->titre_actu }}</h2>
        <img class='imgarticle' src="{{ $actus->img_actu }}"/>
        <div class='article'>
            <h3 class='subarticle'><?php echo ($actus->resume_actu) ?></h3>
            <p><?php echo ($actus->texte_actu) ?></p>
            <a href=''>Read more</a>
        </div>
    </article>

    </table>
    @endforeach

@endsection
