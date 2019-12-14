
<nav id='menuback'>
    <ul>

        <li><a href="{{route('tabrecettes')}}">Recettes</a></li>
        <li><a href="{{route('tabcommentaires')}}">Commentaires Recettes</a></li>


    <span>
        <li><a href="{{route('tabactus')}}">Actus</a></li>
        <li><a href="{{route('tabinsectes')}}">Liste des Insectes</a></li>
        <li><a href="{{route('tabingredients')}}">Liste des Ingrédients</a></li>
        <li><a href="{{route('tabmembres')}}">Membres</a></li>
        <li><a href="{{route('tabinfos')}}">Infos statiques</a></li>


    </span>
    </ul>
</nav>


<div id='backtofront'>
    <button id='tofront'><a href="{{route('home')}}">Retour dans la zone publique</a></button>
    <button id='disconnect'><a href="{{route('disconnect')}}">Se déconnecter</a></button>
</div>
