@extends('layouts.backLayout')

@section('content')

<div id='formActu'>

    <form action="@isset($actu){{route('actu.update', $actu->id)}}@else{{route('actu.store')}}@endisset" method="POST" enctype="multipart/form-data">
						@csrf
						@isset($actu) @method('PUT') @endisset

    @if (isset($actu))
        <h2>Modification d'une actualité</h2>
    @else
        <h2>Création d'une actualité</h2>
    @endif

    <div class='form-group'>
        <label><h3>Titre de l'actualité</h3></label>

        <input type="text" class="form-control" @error('titre_actu') is-invalid @enderror value="@isset($actu){{$actu->titre_actu}}@else{{ old('titre_actu') }}@endisset" name="titre_actu" required>

        @error('titre_actu')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>

    <div class='form-group'>
    <label><h3>Résumé de l'actualité</h3></label>
    <div class="YSeditor">
        <textarea rows="20" cols="50" class="form-control" @error('resume_actu') is-invalid @enderror name="resume_actu" required>@isset($actu)
            {{$actu->resume_actu}}@else{{ old('resume_actu') }}@endisset</textarea>
        </div>
        @error('resume_actu')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>



    <div class='form-groupl'>
    <label><h3>texte de l'actualité</h3></label>
    <div class="YSeditor">
    <textarea rows="20" cols="100" class="form-control" @error('texte_actu') is-invalid @enderror name="texte_actu" required>@isset($actu)
        {{$actu->texte_actu}}@else{{ old('texte_actu') }}@endisset</textarea>
    </div>

        @error('texte_actu')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class='form-group'>
    <label>Image 1 (optionnelle)</label>
	<input id="image1" type="file" name="image1" value="" />
    </div>

    <div class='form-group'>
    <label>Image 2 (optionnelle)</label>
	<input id="image2" type="file" name="image2" value="" />
    </div>

    <input type="submit" id='submit' value='Enregistrer' >

</form>

</div>
@endsection
