<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessStepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species = [
            [
                'name' => 'Aguardando Triagem',
                'weight' => 0
            ],
            [
                'name' => 'Na Triagem',
                'weight' => 1
            ],
            [
                'name' => 'Aguardando Atentimento',
                'weight' => 2
            ],
            [
                'name' => 'Em Atendimento',
                'weight' => 3
            ],
            [
                'name' => 'Finalizado',
                'weight' => 4
            ]
        ];

        DB::table('process_steps')->insert($species);
    }
}
