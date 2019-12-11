<div id='membre'>
    @include('includes.membreform')
</div>

<section>

@include('includes.menu')


<h1 id='title'>Grouille</h1>
@if(Auth::user())
<a  class='welcome' href="/membre"><h2>Bienvenue {{ Auth::user()->name }}</h2></a>
@endif


<div id="right">
    <div id='reseaux'>
        <a href="" target='blank'><img class='pict' src="./img/picto/youtube.png"/></a>
        <a href="" target='blank'><img class='pict' src="./img/picto/instagram.png"/></a>
        <a href="" target='blank'><img class='pict' src="./img/picto/facebook.png"/></a>
    </div>

<div id='connexion'>
        <button id='connectmembre'><a href="{{route('login')}}">Déjà membre?</a></button>
        <button id='newmembre'><a href="{{route('registration')}}">Créer un compte</a></button>
</div>

</section>

<div id="fav">
    @include('includes.fav')
</div>

