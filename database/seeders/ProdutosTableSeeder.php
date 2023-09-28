<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutosTableSeeder extends Seeder
{
    public function run()
    {
        Produto::create([
            'nome' => 'Produto A',
            'preco' => 50.00,
        ]);

        Produto::create([
            'nome' => 'Produto B',
            'preco' => 75.00,
        ]);
    }
}
