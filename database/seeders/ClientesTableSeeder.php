<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'nome' => 'João Silva',
            'email' => 'joao@example.com',
        ]);

        Cliente::create([
            'nome' => 'Maria Santos',
            'email' => 'maria@example.com',
        ]);
    }
}
