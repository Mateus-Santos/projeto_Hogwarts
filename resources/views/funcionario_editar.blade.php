@extends('layout.base', ["current"=>"funcionarios"])

@section('body')
    <form action = "{{route('funcionarios.update', $funcionario)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de funcionario</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{$funcionario->nome}}">
            <label for="sexo">Sexo: </label>
            <input type = "text" class = "form-control" id="sexo" name="sexo" value="{{$funcionario->sexo}}">
            <label for="endereco">Endereço: </label>
            <input type = "text" class = "form-control" id="endereco" name="endereco" value="{{$funcionario->endereco}}">
            <label for="foto">Foto: </label>
            <input type = "file" class = "form-control-file" id="foto" name="foto" value="{{$funcionario->foto}}">

            <select class = "form-control" name = "cargo" id="cargo">
            @foreach($cargos as $car)
                <option value={{$car->id}}>{{$car->cargo}}</option>
            @endforeach
            </select>
            <br>
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection