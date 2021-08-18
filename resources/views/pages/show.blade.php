@extends('template.template')

@section('content')
    <div class="container">

        <h3>Mon ingrédient : </h3>

        <p>ID : {{($show->id)}}</p>
        <p>Nom : {{($show->name)}}</p>
        <p>Quantité : {{($show->quantity)}}</p>

        <a href="/">Sommaire</a>
        <a href="/edit/legume/{{$show->id}}">Edit</a>

    </div>



@endsection