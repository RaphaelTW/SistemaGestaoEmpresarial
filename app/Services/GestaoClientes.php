<?php

namespace App\Services;

use App\Models\Cliente;

class GestaoClientes
{
    public function criarCliente($dados)
    {
        $cliente = new Cliente();
        $cliente->nome = $dados['nome'];
        $cliente->email = $dados['email'];
        $cliente->save();

        return $cliente;
    }

    public function atualizarCliente($id, $dados)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return null; // Ou pode lançar uma exceção
        }

        $cliente->nome = $dados['nome'];
        $cliente->email = $dados['email'];
        $cliente->save();

        return $cliente;
    }

    public function excluirCliente($id)
    {
        $cliente = Cliente::find($id);

        if ($cliente) {
            $cliente->delete();
            return true;
        }

        return false;
    }
}

