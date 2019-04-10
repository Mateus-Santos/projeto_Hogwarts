<?php
Route::get('/', function(){
    return view('login-ministra');
});

Route::get('/funcionario/restaurar/', 'FuncionarioController@indexTrashed')->name('funcionarios.restaurar');
Route::get('/funcionarios/restaurar/{id}', 'FuncionarioController@restore')->name('funcionarios.restore');
Route::get('/sala/restaurar/', 'SalaController@indexTrashed')->name('salas.restaurar');
Route::get('/salas/restaurar/{id}', 'SalaController@restore')->name('salas.restore');
Route::resource('cargos', 'CargoController');
Route::resource('departamentos', 'DepartamentoController');
Route::resource('funcionarios', 'FuncionarioController');
Route::resource('salas', 'SalaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    return redirect(route('login'));
});