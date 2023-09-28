<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos', compact('pedidos'));
    }

    public function show($id)
    {
        $pedido = Pedido::find($id);
        return view('pedido_detalhes', compact('pedido'));
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->cliente_id = $request->input('cliente_id');
        $pedido->produto_id = $request->input('produto_id');
        $pedido->quantidade = $request->input('quantidade');
        $pedido->save();

        return redirect('/pedidos');
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->cliente_id = $request->input('cliente_id');
        $pedido->produto_id = $request->input('produto_id');
        $pedido->quantidade = $request->input('quantidade');
        $pedido->save();

        return redirect('/pedidos');
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();

        return redirect('/pedidos');
    }
}
