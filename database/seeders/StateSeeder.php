<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'Valle del Cauca',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('states')->insert([
            'name' => 'Antioquia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('states')->insert([
            'name' => 'Bogota DC',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
