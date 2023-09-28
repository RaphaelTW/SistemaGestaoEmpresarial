<?php

namespace App\Services;

use App\Models\Pedido;

class GestaoPedidos
{
    public function criarPedido($dados)
    {
        $pedido = new Pedido();
        $pedido->cliente_id = $dados['cliente_id'];
        $pedido->produto_id = $dados['produto_id'];
        $pedido->quantidade = $dados['quantidade'];
        $pedido->save();

        return $pedido;
    }

    public function atualizarPedido($id, $dados)
    {
        $pedido = Pedido::find($id);

        if (!$pedido) {
            return null;
        }

        $pedido->cliente_id = $dados['cliente_id'];
        $pedido->produto_id = $dados['produto_id'];
        $pedido->quantidade = $dados['quantidade'];
        $pedido->save();

        return $pedido;
    }

    public function excluirPedido($id)
    {
        $pedido = Pedido::find($id);

        if ($pedido) {
            $pedido->delete();
            return true;
        }

        return false;
    }
}
