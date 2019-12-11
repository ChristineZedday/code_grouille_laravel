@extends('../layouts.backLayout')

@section('content')
@if (session('status'))

            <div class="alert {{ session('alert-class') }}" role="alert">
				{{ session('status') }}
			</div>

    @endif
            <div class="intit">
            <a href="{{route('ingredient.create')}}" > Ajouter un ingrédient</a>
            </div>

    <section id="ingredients" class="content">
    <h1>Gestion des ingrédients </h1>
    @if ($ingredients)
    <table >
                    <thead >
                        <tr>

                            <th>Nom de l'ingredient</th>
                            <th>Actions</th>
                        </tr>

                    </thead>
                    <tbody>
      @foreach ($ingredients as $ingredient)



                    <tr>

                                <td class="align-middle"> {{$ingredient->nom_ingredient}} </td>

                                <td  class="align-middle"> <a href="{{route('ingredient.show',$ingredient->id)}}" >Voir</a>
                                    <a href="{{route('ingredient.edit',$ingredient->id)}}">Modifier</a>
                                 <form action="{{route('ingredient.destroy', $ingredient->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" >
                                    Supprimer</button></td></form>


                    </tr>

        @endforeach
        </tbody>
                        </table>


    @endif

    </section>

@endsection



