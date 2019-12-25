@extends('layouts.backLayout')

@section('content')

<div id='forminsecte' class='content'>

    <form enctype="multipart/form-data" action="{{route('image.store')}}" method="POST">
						@csrf
						

   
        <h2>Charger une image</h2>

        <div class='form-group'>
<label>Image  </label>
<input id="image1" type="file" name="image1" value="" />
</div>
   

   

    
 <input type="submit" id='submit' value='Enregistrer' >

</form>

</div>
@endsection
