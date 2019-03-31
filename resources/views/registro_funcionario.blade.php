@extends('layout.base', ["current"=>"funcionarios"])

@section('body')
<h1 class="titulo_principal">Realize o cadastro:</h1>
<p class="titulo_registro">Cadastre-se</p>
<form action = "{{route('funcionarios.store')}}" method = "POST">
@csrf
  <div class="form-group">
    <br>
    <label class="texto_registro" for="nome">Escreva seu nome completo:</label>
    <input type="text" class="form-control" id="nome" name="nome">
    <br>
    <label class="texto_registro" for="sexo">Escolha seu sexo:</label>
    <select class="form-control" id="sexo" name="sexo">
      <option></option>
      <option>Masculino</option>
      <option>Feminino</option>
      <option>Outro</option>
    </select>
    <br>
    <label class="texto_registro" for="endereco">Escreva seu endereço:</label>
    <input type="text" class="form-control" id="endereco" name="endereco">
    <br>
    <label class="texto_registro" for="foto">Mande uma foto (poderia ser um gif, né?)</label>
    <input type="file" class="form-control-file" id="foto" name="foto">
    <br>
    <button type="submit" class="btn btn-danger">Confirmar!</button>
</form>
@endsection