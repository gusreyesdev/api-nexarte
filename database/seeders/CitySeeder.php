<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Cali',
            'state_id' => State::find(1)->id,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('cities')->insert([
            'name' => 'Yumbo',
            'state_id' => State::find(1)->id,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('cities')->insert([
            'name' => 'Palmira',
            'state_id' => State::find(1)->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cities')->insert([
            'name' => 'Medellin',
            'state_id' => State::find(2)->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cities')->insert([
            'name' => 'Bogotá',
            'state_id' => State::find(3)->id,
            'created_at' => now(),
            'updated_at' => now(),

        ]);


    }
}
