@extends('layout.base', ["current"=>"departamentos"])

@section('body')
<h1>Lista de departamento</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome do departamento</th>
      <th scope="col">Nome do coordenador</th>
      <th scope="col">Sala de funcionamento</th>
    </tr>
  </thead>
  <tbody>
    @foreach($departamentos as $dep)
    <tr>
      <th scope="row">{{$dep->id}}</th>
      <td>{{$dep->nome}}</td>
      <td>{{$dep->nome_coordenador}}</td>
      <td>{{$dep->sala_funcionamento}}</td>
      <td>
      <form action = "{{route('departamentos.destroy', $dep)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('departamentos.edit', $dep)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
      </td>
    </tr>
    @endforeach
  </tbody>

</table>
@endsection