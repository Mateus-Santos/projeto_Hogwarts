@extends('layout.base', ["current"=>"cargos"])

@section('body')

<h1 class="titulo">Lista de cargos</h1>
<div class="listas_tabelas">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cargo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cargos as $car)
    <tr>
      <th scope="row">{{$car->id}}</th>
      <td>{{$car->nome}}</td>
      <td>
      <form action = "{{route('cargos.destroy', $car)}}" method = "POST">
                @CSRF
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection