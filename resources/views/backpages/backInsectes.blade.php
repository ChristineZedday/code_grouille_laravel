@extends('layouts.backLayout')
@section('content')
@if (session('status'))
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert {{ session('alert-class') }}" role="alert">
				{{ session('status') }}
			</div>
        </div>
    </div>
    @endif

            <a href="{{route('insecte.create')}}" > Ajouter un insecte</a>
        </div>
    </div>

    <section id='insectes' class='content'>
    <h1>Gestion des insectes </h1>
    @if ($insectes)
    <table >
                    <thead >
                        <tr>
                            <th>Nom de l'insecte</th>
                            <th>Nom latin</th>
                            <th>Ordre</th>
                            <th>Actions</th>

                        </tr>

                    </thead>
                    <tbody>
      @foreach ($insectes as $insecte)



                    <tr>
                                <td class="align-middle"> {{ $insecte->nom_insecte }}</td>
                                <td class="align-middle">{{$insecte->nom_latin_insecte}}</td>
                                <td class="align-middle">{{$insecte->ordre_insecte}}</td>
                                <td  class="align-middle"> <a href="{{route('insecte.show',$insecte->id)}}" >Voir</a>
                                    <a href="{{route('insecte.edit',$insecte->id)}}">Modifier</a>
                                 <form action="@isset($insecte){{route('insecte.destroy', $insecte->id)}}@endisset" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirmation()" >
                                    Supprimer</button></td></form>


                    </tr>

        @endforeach
        </tbody>
                        </table>

    @else
              <P>  Aucun insecte enregistré! </P>
    @endif

    </section>
    </div>
    </div>
@endsection


<script type="text/javascript">
function confirmation()
{
var message = confirm('Voulez-vous vraiment supprimer l\'insecte n°: '.{{$insecte->id}}.'?');
if (message)
{

}
}

</script>
