<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Produto 1',
            'descricao' => 'Descrição do Produto 1',
            'preco' => 10.99,
        ]);

        Produto::create([
            'nome' => 'Produto 2',
            'descricao' => 'Descrição do Produto 2',
            'preco' => 19.99,
        ]);
    }
}