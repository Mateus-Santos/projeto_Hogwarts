@extends('layout.base', ["current"=>"funcionarios"])

@section('body')
<h1 class="titulo">Lista de Funcionários</h1>
<div class="listas_tabelas"> 
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">RUB</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Sexo</th>
      <th scope="col">Cargo</th>
      <th scope="col">Ações</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($funcionarios as $func)
    <tr>
      <th scope="row">{{$func->id}}</th>
      <td>{{$func->nome}}</td>
      <td>{{$func->endereco}}</td>
      <td>{{$func->sexo}}</td>
      <td>{{$func->cargo["nome"]}}</td>
      <td>
            <form action = "{{route('funcionarios.destroy', $func)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('funcionarios.edit', $func)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
      <td><img class="imagem" src="../storage/{{$func->foto}}"/></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection