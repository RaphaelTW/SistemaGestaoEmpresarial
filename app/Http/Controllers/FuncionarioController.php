<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios', compact('funcionarios'));
    }

    public function show($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario_detalhes', compact('funcionario'));
    }

    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->input('nome');
        $funcionario->cargo = $request->input('cargo');
        $funcionario->save();

        return redirect('/funcionarios');
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->nome = $request->input('nome');
        $funcionario->cargo = $request->input('cargo');
        $funcionario->save();

        return redirect('/funcionarios');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();

        return redirect('/funcionarios');
    }
}
