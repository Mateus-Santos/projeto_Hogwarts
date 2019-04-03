@extends('layout.base', ["current"=>"cargos"])

@section('body')
<h1>Lista de cargos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cargo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cargos as $car)
    <tr>
      <th scope="row">{{$car->id}}</th>
      <td>{{$car->nome}}</td>
      <td>
      <form action = "{{route('cargos.destroy', $car)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('cargos.edit', $car)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection