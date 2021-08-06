@extends('template.template')

@section('content')

    <div class="container">
        <p>nouveau légume : </p>

        <form action="{{route('créerLegume')}}" method="post">
        @csrf

            <label class="mt-2 mb-2" for="">Nom légume :</label>
            <input type="text" name="nomLegume" id="">
                <br>
            <label class="mt-2 mb-2" for="">Quantité :</label>
            <input type="text" name="quantiteLegume" id="">
                <br>
            <button class="mt-2 mb-2" type="submit">Ajouter</button>

        </form>

    </div>

@endsection