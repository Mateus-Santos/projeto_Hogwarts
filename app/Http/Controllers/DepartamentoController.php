<?php

namespace App\Http\Controllers;

use App\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('list-departamento', compact('departamentos'));
    }

    //Função para restaurar

    public function indexTrashed(){
        $departamentos = Departamento::onlyTrashed()->get();
        return view('', compact('departamentos'));
    }

    //Função para restaurar

    public function restore($id){
        $departamento = Departamento::onlyTrashed()->find($id);
        $departamento->restore();
        return redirect()->route('departamentos.index');
    }

    public function create()
    {
        return view('departamento');
    }

    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nome = $request->input("nome_departamento");
        $departamento->nome_coordenador = $request->input("nome_coordenador");
        $departamento->sala_funcionamento = $request->input("sala_funcionamento");
        $departamento->save();
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        return view('departamento_editar', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $departamento->nome = $request->input("nome_sala");
        $departamento->nome_coordenador = $request->input("nome_coordenador");
        $departamento->sala_funcionamento = $request->input("func_responsavel");
        $departamento->save();
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
}
