@extends('../layouts.backLayout')

@section('content')
@if (session('status'))
    <div class="alert {{ session('alert-class') }}" role="alert">
        {{ session('status') }}
    </div>
@endif

    <div class="intit">
    <h1>Gestion des ingrédients </h1>
    <a href="{{route('ingredient.create')}}" > Ajouter un ingrédient</a>
    </div>

    <div id="ingredients" class="content">
    @if ($ingredients)
    <table>
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

            <td class="align-middle">
                <button><a href="{{route('ingredient.show',$ingredient->id)}}">Voir</a></button>
                <button><a href="{{route('ingredient.edit',$ingredient->id)}}">Modifier</a></button>
                <form action="{{route('ingredient.destroy', $ingredient->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" >Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach

        </tbody>
        </table>


    @endif
</div>

@endsection



