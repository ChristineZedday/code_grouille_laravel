@extends('layouts.default')

@section('background')

<div>
    <h2 class='titreintro'>Nous contacter </h2>
</div>

@endsection

@section('content')

<div>

    <form id="contactform" method="post" action="{{route('contact.store')}}">
    @csrf
        <div>
            <div id="contactformlabel">

                <label>Nom</label>
                <label>Prénom</label>
                <label>Téléphone</label>
                <label>E-Mail</label>


            </div>


            <div>


                <input type="text" name="nom">
                <input type="text" name="prenom">
                <input type="text" name="telephone">
                <input type="text" name="email">

            </div>

        <div>

            <label>Message</label>

            <textarea type="text" name="message"></textarea>

        </div>

        <button>Envoyer</button>

    </form>
</div>



@endsection
