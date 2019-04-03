@extends('layout.base', ["current"=>"departamentos"])

@section('body')
<h1>Ministério da Magia de Hogwarts</h1>
<br>
<p>Cadastro de Departamento</p>
<form action = "{{route('departamentos.store')}}" method = "POST">
@csrf
        <br>
        <label class="texto_registro" for="nome_sala">Nome do Departamento:</label>
        <input type="text" class="form-control" id="nome_sala" name="nome_departamento" placeholder="digite aqui o nome do departamento">
    <br>
        <label class="texto_registro" for="numero_sala">Nome do Coordenador:</label>
        <input type="text" class="form-control" id="numero_sala" name="nome_coordenador" placeholder="digite aqui o nome do coordenador do departamento">   
    <br>
        <label class="texto_registro" for="func_responsavel">Sala de funcionamento:</label>
        <input type="text" class="form-control" id="func_responsavel" name ="sala_funcionamento" placeholder="digite aqui o nome da sala de funcionamento">   
    <br>
    <button type="submit" class="btn btn-primary">PRONTO!</button>
</form>
@endsection