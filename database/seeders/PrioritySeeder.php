<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            'name' => 'Normal',
            'type' => 'primary'
        ]);

        DB::table('priorities')->insert([
            'name' => 'Orta',
            'type' => 'warning'
        ]);

        DB::table('priorities')->insert([
            'name' => 'Yüksek',
            'type' => 'danger'
        ]);
    }
}
