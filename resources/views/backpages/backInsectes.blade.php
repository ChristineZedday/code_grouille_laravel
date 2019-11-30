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
    <section id='insectes' class='content'>
    <h1>Gestion des insectes </h1>
    @if ($insectes)
    <table class="table table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nom de l'insecte</th>
                            <th>Nom latin</th>
                            <th>Ordre</th>
                           
                           
                        </tr>
                       
                    </thead>
                    <tbody>
      @foreach ($insectes as $insecte)
       
            
          
                    <tr>
                                <td class="align-middle"> {{ $insecte->nom_insecte }}</td>
                                <td class="align-middle">{{$insecte->nom_latin_insecte}}</td>
                                <td class="align-middle">{{$insecte->ordre_insecte}}</td>
                                
                                
                                
                    </tr>
                      
        @endforeach
        </tbody>
                        </table>
       
    @else
              <P>  Aucun insecte enregistré! </P>
    @endif    

    </section>
@endsection
