<?php

namespace App\Http\Controllers;

use App\funcionario;
use App\Cargo;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('list-funcionario', compact('funcionarios'));
    }

    //Função para restaurar

    public function indexTrashed(){
        $funcionarios = Funcionario::onlyTrashed()->get();
        return view('funcionario-restaurar', compact('funcionarios'));
    }

    //Função para restaurar

    public function restore($id){
        $funcionario = Funcionario::onlyTrashed()->find($id);
        $funcionario->restore();
        return redirect()->route('funcionarios.index');
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('registro_funcionario', compact('cargos'));
    }

    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->endereco = $request->input("endereco");
        $funcionario->foto = $request->input("foto");
        $funcionario->cargo_id = $request->input("cargo");
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        return view('funcionario_editar', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->endereco = $request->input("endereco");
        $funcionario->foto = $request->input("foto");
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
