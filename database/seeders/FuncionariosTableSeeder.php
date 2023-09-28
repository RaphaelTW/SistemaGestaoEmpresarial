<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class FuncionariosTableSeeder extends Seeder
{
    public function run()
    {
        Funcionario::create([
            'nome' => 'José Oliveira',
            'cargo' => 'Analista de Vendas',
        ]);

        Funcionario::create([
            'nome' => 'Ana Sousa',
            'cargo' => 'Gerente de Produção',
        ]);
    }
}
