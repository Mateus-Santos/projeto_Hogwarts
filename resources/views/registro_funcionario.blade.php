@extends('layout.base', ["current"=>"funcionarios"])

@section('body')
<h1 class="titulo">Realize o cadastro:</h1>
<div class="tela_registro">
<form action = "{{route('funcionarios.store')}}" method = "POST">
@csrf
    <label class="texto_registro" for="nome">Escreva seu nome completo:</label>
    <input type="text" class="form-control" id="nome" name="nome">
    <label class="texto_registro" for="sexo">Escolha seu sexo:</label>
    <select class="form-control" id="sexo" name="sexo">
      <option></option>
      <option>Masculino</option>
      <option>Feminino</option>
      <option>Outro</option>
    </select>
    <label for="cargo">Cargo: </label>
    <select class = "form-control" name = "cargo" id="cargo">
            @foreach($cargos as $car)
                <option value={{$car->id}}>{{$car->nome}}</option>
            @endforeach
    </select>
    <label class="texto_registro" for="endereco">Escreva seu endereço:</label>
    <input type="text" class="form-control" id="endereco" name="endereco">
    <label class="texto_registro" for="foto">Mande uma foto (poderia ser um gif, né?)</label>
    <input type="file" class="form-control-file" id="foto" name="foto">
    <br>
    <button type="submit" class="btn btn-danger">Confirmar!</button>
</form>
</div>
@endsection