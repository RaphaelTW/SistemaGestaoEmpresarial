<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produto_detalhes', compact('produto'));
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->save();

        return redirect('/produtos');
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->save();

        return redirect('/produtos');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('/produtos');
    }
}
