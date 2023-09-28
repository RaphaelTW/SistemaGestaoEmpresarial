<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;

class PedidosTableSeeder extends Seeder
{
    public function run()
    {
        Pedido::create([
            'cliente_id' => 1,
            'produto_id' => 1,
            'quantidade' => 2,
        ]);

        Pedido::create([
            'cliente_id' => 2,
            'produto_id' => 2,
            'quantidade' => 1,
        ]);
    }
}
