<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\Without ModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            [
                'nome' => 'Aspirador Inteligente', 
                'quantidade' => 10,
                'valor' => 100.10,
            ]
        ]);
    }
}
