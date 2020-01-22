@extends('layouts.backLayout')

@section('content')

<div id='forminsecte' class='content'>

    <form enctype="multipart/form-data" action="@isset($image){{route('image.update', $image->id)}}@else{{route('image.store')}}@endisset" method="POST">
						@csrf
                        @isset($image) @method('PUT') @endisset
						
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
<label>Renommer l'image @isset($image){{$image->chemin_image}}@endisset ?  </label>
<input id="nom" type="text" name="chemin_image" value="" />
</div>
   

    
 <input type="submit" id='submit' value='Enregistrer' >

</form>

</div>
@endsection
