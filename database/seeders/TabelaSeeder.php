<?php

namespace Database\Seeders;

use App\Models\Tabela;
use Illuminate\Database\Seeder;

class TabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tabela::create([

            'nome' =>'Price',

            ]);
            Tabela::create([

                'nome' =>'SAC',

                ]);
    }
}
