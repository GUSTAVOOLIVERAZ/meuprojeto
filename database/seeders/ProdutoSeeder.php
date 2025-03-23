<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Aspirador Inteligente', 
            'quantidade'=> 10 ,
            'valor' => 100.10,
        ]);
    }
}
