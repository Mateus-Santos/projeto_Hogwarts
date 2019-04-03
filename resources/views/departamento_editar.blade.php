@extends('layout.base', ["current"=>"departamentos"])

@section('body')
    <form action = "{{route('departamentos.update', $departamento)}}" method = "POST">
        @csrf
        @method('PUT')
            <h1>Edição de departamento</h1>
            <label for="nome_sala">Nome sala: </label>
            <input type = "text" class = "form-control" id="nome_sala" name="nome_sala" value="{{$departamento->nome}}">
            <label for="nome_coordenador">Nome coordenador: </label>
            <input type = "text" class = "form-control" id="nome_coordenador" name="nome_coordenador" value="{{$departamento->nome_coordenador}}">
            <label for="func_responsavel">Sala funcionamento: </label>
            <input type = "text" class = "form-control" id="func_responsavel" name="func_responsavel" value="{{$departamento->sala_funcionamento}}">
            <br>
            <button class = "btn btn-primary" type = "submit">Salvar</button>
    </form>
@endsection