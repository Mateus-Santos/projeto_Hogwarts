@extends('layout.base', ["current"=>"funcionarios"])

@section('body')
<h1 class="titulo">Lista de Funcionários excluidos</h1>
<div class="listas_tabelas">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">RUB</th>
      <th scope="col">Nome</th>
      <th scope="col">Foto</th>
      <th scope="col">Endereço</th>
      <th scope="col">Sexo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($funcionarios as $func)
    <tr>
      <th scope="row">{{$func->id}}</th>
      <td>{{$func->nome}}</td>
      <td>{{$func->foto}}</td>
      <td>{{$func->endereco}}</td>
      <td>{{$func->sexo}}</td>
      <td>
            <a href="{{route('funcionarios.restore', $func->id)}}" class="btn btn-success"> Restaurar </a>  
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>
@endsection