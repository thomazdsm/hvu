<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        [
            'name' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Médico Veterinário',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Recepcionista',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

        DB::table('roles')->insert($roles);
    }
}
