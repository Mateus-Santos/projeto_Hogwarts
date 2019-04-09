<?php


Route::view('/', 'tela_principal');



Route::get('/funcionario/restaurar/', 'FuncionarioController@indexTrashed')->name('funcionarios.restaurar');
Route::get('/funcionarios/restaurar/{id}', 'FuncionarioController@restore')->name('funcionarios.restore');
Route::get('/sala/restaurar/', 'SalaController@indexTrashed')->name('salas.restaurar');
Route::get('/salas/restaurar/{id}', 'SalaController@restore')->name('salas.restore');
Route::resource('cargos', 'CargoController');
Route::resource('departamentos', 'DepartamentoController');
Route::resource('funcionarios', 'FuncionarioController');
Route::resource('salas', 'SalaController');



/*
Route::view('/tela_principal','tela_principal');

Route::view('/registro_funcionario', 'registro_funcionario');

Route::view('/login','login');

Route::view('/sala', 'sala');

Route::view('/alocacao-sala', 'alocacao-sala');

Route::view('/list-sala', 'list-sala');

Route::view('/list-alocacao', 'list-alocacao');

Route::view('/list-funcionario','list-funcionario');*/