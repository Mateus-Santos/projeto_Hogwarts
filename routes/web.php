<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/tela_principal','tela_principal');

Route::view('/registro_funcionario', 'registro_funcionario');

Route::view('/login','login');