<?php

namespace App\Services;

use App\Models\Funcionario;

class GestaoFuncionarios
{
    public function criarFuncionario($dados)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $dados['nome'];
        $funcionario->cargo = $dados['cargo'];
        $funcionario->save();

        return $funcionario;
    }

    public function atualizarFuncionario($id, $dados)
    {
        $funcionario = Funcionario::find($id);

        if (!$funcionario) {
            return null;
        }

        $funcionario->nome = $dados['nome'];
        $funcionario->cargo = $dados['cargo'];
        $funcionario->save();

        return $funcionario;
    }

    public function excluirFuncionario($id)
    {
        $funcionario = Funcionario::find($id);

        if ($funcionario) {
            $funcionario->delete();
            return true;
        }

        return false;
    }
}
