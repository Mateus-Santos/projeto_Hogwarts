@extends('layout.base', ["current"=>"salas"])

@section('body')
<h1 class="titulo">Editar Salas:</h1>
<div class="tela_registro">
<form action = "{{route('salas.update', $sala)}}" method = "POST">
@csrf
    <label for="nome_sala">Informe o nome da sala:</label>
    <input type="text" class="form-control" id="nome_sala" name="nome_sala" value="{{$sala->nome_sala}}">
    <label for="numero_sala">Informe o número da sala:</label>
    <input type="text" class="form-control" id="numero_sala" name="numero_sala" value="{{$sala->numero_sala}}">  
    <label for="funcionario_responsavel">Funcionário Responsável:</label>
    <input type="text" class="form-control" id="funcionario_responsavel" name="funcionario_responsavel" value="{{$sala->funcionario_responsavel}}">    
    <br>
    <button type="submit" class="btn btn-danger">Confirmar!</button>
</form>
</div>
@endsection