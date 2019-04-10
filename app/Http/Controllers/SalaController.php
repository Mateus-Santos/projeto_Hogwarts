<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view('list-sala', compact('salas'));
    }

    public function construct()
    {
        $this->middleware('auth');
    }

    //Função para restaurar

    public function indexTrashed()
    {
        $salas = Sala::onlyTrashed()->get();
        return view('sala-restaurar', compact('salas'));
    }

    //Função para restaurar

    public function restore($id)
    {
        $sala = Sala::onlyTrashed()->find($id);
        $sala->restore();
        return redirect()->route('salas.index');
    }
    
    public function create()
    {
        return view('sala');
    }

    public function store(Request $request)
    {
        $sala = new Sala();
        $sala->nome_sala = $request->input("nome_sala");
        $sala->numero_sala = $request->input("numero_sala");
        $sala->funcionario_responsavel = $request->input("funcionario_responsavel");
        $sala->save();
        return redirect()->route('salas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\create_salas_table  $create_salas_table
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\create_salas_table  $create_salas_table
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {        
        return view('sala_editar', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\create_salas_table  $create_salas_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        $sala->nome_sala = $request->input("nome_sala");
        $sala->numero_sala = $request->input("numero_sala");
        $sala->funcionario_responsavel = $request->input("funcionario_responsavel");        
        $sala->save();
        return redirect()->route('salas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\create_salas_table  $create_salas_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();
        return redirect()->route('salas.index');
    }
}

