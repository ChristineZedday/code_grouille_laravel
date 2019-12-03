@extends('../layouts.backLayout')
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

            <a href="{{route('ingredient.create')}}" > Ajouter un ingrédient</a>
        </div>
    </div>

    <section id='ingredients' class='content'>
    <h1>Gestion des ingrédients </h1>
    @if ($ingredients)
    <table >
                    <thead >
                        <tr>
                            <th>Nom de l'insecte</th>
                            <th>Nom de l'ingredient</th>
                            <th>Actions</th>
                        </tr>

                    </thead>
                    <tbody>
      @foreach ($ingredients as $ingredient)



                    <tr>
                                <td class="align-middle"> {{ $ingredient->id_insecte->nom_insecte }}</td>
                                <td class="align-middle">{{$ingredient->nom_ingredient}}</td>

                                <td  class="align-middle"> <a href="{{route('ingredient.show',$ingredient->id)}}" >Voir</a>
                                    <a href="{{route('ingredient.edit',$ingredient->id)}}">Modifier</a>
                                 <form action="@isset($ingredient){{route('ingredient.destroy', $ingredient->id)}}@endisset" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirmation()" >
                                    Supprimer</button></td></form>


                    </tr>

        @endforeach
        </tbody>
                        </table>

    @else
              <P>  Aucun ingredient enregistré! </P>
    @endif

    </section>
    </div>
    </div>
@endsection


<script type="text/javascript">
function confirmation()
{
var message = confirm('Voulez-vous vraiment supprimer l\'ingrédient n°: '.{{$ingredient->id}}.'?');
if (message)
{

}
}

</script>
