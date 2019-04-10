@extends('layout.base', ["current"=>"salas"])

@section('body')
<h1 class="titulo">Lista de Salas</h1>
<div class="listas_tabelas"> 
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>      
      <th scope="col">Nome</th>
      <th scope="col">Número da Sala</th>
      <th scope="col">Funcionário Responsável</th>     
    </tr>
  </thead>
  <tbody>
    @foreach($salas as $sal)
    <tr>
      <th scope="row">{{$sal->id}}</th>
      <td>{{$sal->nome_sala}}</td>
      <td>{{$sal->numero_sala}}</td>
      <td>{{$sal->funcionario_responsavel}}</td>      
      <td>
            <form action = "{{route('salas.destroy', $sal)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('salas.edit', $sal)}}">Editar</a>
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