@extends('layouts.backLayout')

@section('content')

<div id='forminsecte' class='content'>

    <form enctype="multipart/form-data" action="{{route('image.store')}}" method="POST">
						@csrf
						
@isset($image)
   
<h2>Modifier une image</h2>    

@else 
<h2>Charger une image</h2>

<div class='form-group'>
<label>Image  </label>
<input id="image1" type="file" name="image1" value="" required />
</div>
@endisset
   
<div class='form-group'>
<label>Renommer l'image?  </label>
<input id="nom" type="text" name="nom" value="" />
</div>
   

    
 <input type="submit" id='submit' value='Enregistrer' >

</form>

</div>
@endsection
