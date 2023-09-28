<?php

namespace App\Services;

use App\Models\Produto;

class GestaoProdutos
{
    public function criarProduto($dados)
    {
        $produto = new Produto();
        $produto->nome = $dados['nome'];
        $produto->preco = $dados['preco'];
        $produto->save();

        return $produto;
    }

    public function atualizarProduto($id, $dados)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return null;
        }

        $produto->nome = $dados['nome'];
        $produto->preco = $dados['preco'];
        $produto->save();

        return $produto;
    }

    public function excluirProduto($id)
    {
        $produto = Produto::find($id);

        if ($produto) {
            $produto->delete();
            return true;
        }

        return false;
    }
}
