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
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{route('insecte.create')}}" class="btn btn-success mb-4"><i class="fa fa-plus"></i> Ajouter un insecte</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
    <section id='insectes' class='content'>
    <h1>Gestion des insectes </h1>
    @if ($insectes)
    <table class="table table-striped text-center">
                    <thead class="thead-dark">
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
                                <td  class="align-middle"> <a href="{{route('insecte.show',$insecte->id)}}" class="btn">Voir</a>
                                    <a href="{{route('insecte.edit',$insecte->id)}}" class="btn">Modifier</a>
                                    <a href="#modalDeleteInsecte" data-toggle="modal" data-target="#modalDeleteInsecte" data-InsecteId="{{$insecte->id}}" class="btn">Supprimer</a></td>
                                
                                
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

@section('hidden')
<div class="modal fade" tabindex="-1" role="dialog" id="modalDeleteInsecte">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suppression d'un insecte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Etes-vous sur de vouloir supprimer cette bestiole ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form id="formDeleteInsecte" action="" method="POST" class="d-inline m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
window.addEventListener('load', function() {
    $("#modalDeleteInsecte").on('show.bs.modal', function (e) {
        flightId = $(e.relatedTarget).attr('data-insecteid');
        $("#formDeleteInsecte").attr('action','back/insectes/'+$(e.relatedTarget).attr('data-insecteid')+'/destroy');
    });
});
</script>
@endsection
