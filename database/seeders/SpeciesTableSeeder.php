<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species = [
            ['name' => 'Cachorro'],
            ['name' => 'Gato'],
            ['name' => 'Coelho'],
            ['name' => 'Hamster'],
            ['name' => 'Peixe'],
            ['name' => 'Pássaro'],
            ['name' => 'Tartaruga'],
        ];

        DB::table('species')->insert($species);
    }
}
