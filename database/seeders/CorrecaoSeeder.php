<?php

namespace Database\Seeders;

use App\Models\Correcao;
use Illuminate\Database\Seeder;

class CorrecaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Correcao::create([

            'nome' =>'TR',

            ]);
            Correcao::create([

                'nome' =>'Poupança',

                ]);
    }
}
