@extends('layout.base', ["current"=>"salas"])

@section('body')
<h1 class="titulo">Cadastro de Salas:</h1>
<div class="tela_registro">
<form action = "{{route('salas.store')}}" method = "POST" enctype="multipart/form-data">
@csrf
    <label for="nome_sala">Informe o nome da sala:</label>
    <input type="text" class="form-control" id="nome_sala" name="nome_sala">
    <label for="numero_sala">Informe o número da sala:</label>
    <input type="text" class="form-control" id="numero_sala" name="numero_sala">

    <label for="funcionario_responsavel">Funcionário Responsável:</label>
    <select class = "form-control" name = "funcionario_responsavel" id="funcionario_responsavel">
    @foreach($funcionarios as $func)
                <option value={{$func->nome}}>{{$func->nome}}</option>
    @endforeach
    </select>
    <br>
    <button type="submit" class="btn btn-danger">Confirmar!</button>
</form>
</div>
@endsection