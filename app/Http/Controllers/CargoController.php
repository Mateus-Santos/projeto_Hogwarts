<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
class CargoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cargos = Cargo::all();
        return view('list-cargo', compact('cargos'));
    }

    //Função para restaurar


    public function create()
    {
        return view('registrar-cargo');
    }

    public function store(Request $request)
    {
        $cargos = new Cargo();
        $cargos->nome = $request->input("cargo");
        $cargos->save();
        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $cargos = new Cargo();
        $cargos->nome = $request->input("cargo");
        return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\create_funcionarios_table  $create_funcionarios_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}
