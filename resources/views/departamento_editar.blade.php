@extends('layout.base', ["current"=>"departamentos"])

@section('body')

<h1 class="titulo">Registrar Departamento</h1>
<br>
<div class="tela_registro">
<form action = "{{route('departamentos.update', $departamento)}}" method = "POST" enctype="multipart/form-data">
@csrf
@method('PUT')
        <br>
        <label class="texto_registro" for="nome_sala">Nome do Departamento:</label>
        <input type="text" class="form-control" id="nome_sala" name="nome_departamento" placeholder="digite aqui o nome do departamento">
    <br>
    <label for="nome_coordenador">Nome Coordenador: </label>
    <select class = "form-control" name = "nome_coordenador" id="nome_coordenador">
            @foreach($funcionarios as $func)
            @if($func->cargo_id == 1)
                <option value={{$func->nome}}>{{$func->nome}}</option>
            @endif    
            @endforeach
    </select>   
    <br>
    <label for="sala_funcionamento">Sala de funcionamento: </label>
    <select class = "form-control" name = "sala_funcionamento" id="sala_funcionamento">
            @foreach($salas as $sal)
                <option value={{$sal->nome_sala}}>{{$sal->nome_sala}}</option>
            @endforeach
    </select>   
    <br>
    <button type="submit" class="btn btn-primary">PRONTO!</button>
</form>
</div>
@endsection