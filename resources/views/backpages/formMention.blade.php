@extends('layouts.backLayout')

@section('content')

<div id='formMention'>

    <h2>Mentions Légales</h2>


    <form action="@isset($mention){{route('mention.update', $mention->id) }}@endisset" method="POST">
            @csrf
            @isset($mentions) @method('POST') @endisset

            <div class='form-group'>
                <div class="YSeditor">
                    <textarea rows="20" cols="100" class="form-control" @error('texte_mentions') is-invalid @enderror name="texte_mentions" required>@isset($mention)
                        {{$mention->texte_mentions}}@endisset</textarea>
                </div>

                @error('texte_mentions')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>



        <input type="submit" id='submit' value='Enregistrer' >

    </form>

</div>
@endsection
