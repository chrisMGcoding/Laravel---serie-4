@extends('template.template')

@section('content')

    <h1>test</h1>

    @foreach ($legume as $item)

        <p>{{($item->name)}}</p>

    @endforeach

    @foreach ($fruit as $item)

        <p>{{($item->name)}}</p>

    @endforeach

@endsection