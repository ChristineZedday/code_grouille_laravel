<form action="@isset($insecte){{route('insecte.update', $insecte->id)}}@else{{route('insecte.store')}}@endisset" method="POST">
						@csrf
						@isset($insecte) @method('PUT') @endisset

    <img class='pict' id='close' src="../img/picto/cross.png"/>
    
    @if (isset($insecte))
							<h2>Modification d'un insecte</h2>
						@else
							<h2>Création d'un insecte</h2>
						@endif
    <div class='form'>
    <label><h3>Nom de l'insecte</h3></label>
    <input type="text" placeholder="Entrer le nom français" name="fname" required>
    </div>

    <div class='form'>
    <label><h3>Nom latin</h3></label>
    <input type="texte" placeholder="Entrer le nom latin" name="lname" required>
    </div>

    <div class='form'>
    <label><h3>Ordre</h3></label>
    <input type="texte" placeholder="Entrer l'ordre" name="ordre" required>
    </div>

    <div class='form'>
    <label><h3>Description</h3></label>
    <input type="texte" placeholder="Entrer la description'" name="description" required>
    </div>

    <input type="submit" id='submit' value='Enregistrer' >

</form>
