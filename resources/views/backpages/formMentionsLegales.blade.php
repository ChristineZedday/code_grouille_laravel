@extends('layouts.backLayout')

@section('content')

<div id='formMentionsLegales'>

    <h2>Mentions Légales</h2>
 

    <form action="{{ }}" method="POST">
        @csrf
        <input type="text" name="nom" id="nom">
       
    </form>


 
    <input type="submit" id='submit' value='Enregistrer' >

</form>

</div>
@endsection
