@extends('layout.base', ["current"=>"principal"])

@section('body')
    @auth
        <h1 class="titulo">Bem-vinda poderoso(a) ministro(a) {{Auth::user()->name}}</h1>
    @endauth

    @guest
    @endguest
@endsection