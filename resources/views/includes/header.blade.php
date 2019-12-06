 <div id='membre'>
    @include('includes.membreform')
</div>

{{-- <div id='register'>
    @include('includes.register')
</div> --}}

<section>

@include('includes.menu')

<h1>Grouille !</h1>

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

</div>


