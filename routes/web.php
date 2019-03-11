<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/tela_principal','tela_principal');

Route::view('/registro_funcionario', 'registro_funcionario');

Route::view('/login','login');

Route::view('/sala', 'sala');

Route::view('/alocacao-sala', 'alocacao-sala');

Route::view('/list-sala', 'list-sala');

Route::view('/list-alocacao', 'list-alocacao');