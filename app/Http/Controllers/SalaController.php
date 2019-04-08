<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view('list-sala', compact('salas'));
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

    public function store(Request $request)
    {
        $sala = new Sala();
        $sala->nome_da_sala = $request->input("nome_da_sala");
        $sala->numero_da_sala = $request->input("numero_da_sala");
        $sala->funcionario_responsavel = $request->input("funcionario_responsavel");
        $sala->save();
        return redirect()->route('salas.index');
    }

    
}
