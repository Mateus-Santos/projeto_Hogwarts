@extends('layout.base', ["current"=>"cargos"])

@section('body')
<h1>Adicione um cargo novo:</h1>
<br>
<form action = "{{route('cargos.store')}}" method = "POST">
@csrf
    <label class="texto_registro" for="cargo">Escreva o nome do cargo:</label>
    <input type="text" class="form-control" id="cargo" name="cargo">
    <br>
    <button type="submit" class="btn btn-danger">Confirmar!</button>
</form>
@endsection