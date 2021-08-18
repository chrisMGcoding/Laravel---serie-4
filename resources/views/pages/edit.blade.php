@extends('template.template')

@section('content')

    <h2>Bienvenue sur Edit</h2>

    <form action="/update/legume/{{$user->id}}" method="post">
        @csrf

            <label class="mt-2 mb-2" for="">Nom légume :</label>
            <input type="text" name="nomLegume" id="" value="{{$user->name}}">
                <br>
            <label class="mt-2 mb-2" for="">Quantité :</label>
            <input type="text" name="quantiteLegume" id="" value="{{$user->quantity}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

    </form>

@endsection