@extends('layout.base', ["current"=>"funcionarios"])

@section('body')
<h1>Lista de Funcionários</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">RUB</th>
      <th scope="col">Nome</th>
      <th scope="col">Foto</th>
      <th scope="col">Endereço</th>
      <th scope="col">Sexo</th>
      <th scope="col">Cargo</th>
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
      <td>{{$func->cargo["nome"]}}</td>
    </tr>
    @endforeach
  </tbody>

</table>
@endsection