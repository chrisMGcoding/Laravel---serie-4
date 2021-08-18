@extends('template.template')

@section('content')

<h3>Légumes</h3>

<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
        @foreach ($legume as $item)
    <tr>
      <th scope="row">{{($item->id)}}</th>
      <td><a href="/show/legume/{{($item->id)}}">{{($item->name)}}</a></td>
      <td>{{($item->quantity)}}</td>
      <td>
          <form action="/destroy/legume/{{($item->id)}}" method="post">
          @csrf
            <button type="submit">Delete</button>
          </form>
      </td>
    </tr>
        @endforeach
    
  </tbody>
</table>

@endsection