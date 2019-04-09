@extends('layout.base', ["current"=>"principal"])

@section('body')
    <h1>Bem-vinda poderoso(a) ministro(a)</h1>
    @auth
        <h1>Olá, {{Auth::user()->name}}</h1>
    @endauth

    @guest
    @endguest
@endsection