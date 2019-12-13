@extends('layouts.backLayout')

@section('content')

<div id='forminfo' class='content'>

    <form action="@isset($info){{route('info.update', $info->id)}}@else{{route('info.store')}}@endisset" method="POST">
						@csrf
						@isset($info) @method('PUT') @endisset

        <h2>Modification d'une info statique</h2>

        @if (isset($info->titre))

            <div class='form-group'>
                <label><h3>Titre à modifier</h3></label>

                <input type="text" class="form-control" @error('titre') is-invalid @enderror value="{{$info->titre}}" name="titre">

                @error('titre')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>



        @endif

        @if (isset($info->texte))

            <div class='form-group'>
                <label><h3>Texte à modifier</h3></label>

                <div class="YSeditor">
                    <textarea rows="20" cols="100" class="form-control" @error('texte') is-invalid @enderror  name="texte">@isset($info)
                        {{$info->texte}}@else{{ old('info->texte') }}@endisset</textarea>
                </div>

                @error('texte')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

        @endif


        @if (isset($info->email))

            <div class='form-group'>
                <label><h3>E-mail à modifier</h3></label>

                <input type="text" class="form-control" @error('email') is-invalid @enderror value="{{$info->email}}" name="email">

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

        @endif




        <input type="submit" id='submit' value='Enregistrer' >

    </form>

</div>
@endsection
