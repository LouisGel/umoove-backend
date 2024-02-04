<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('histories')->insert([
            [
                'date_time' => now(),
                'nb_points' => 50,
                'activity_id' => 1, // Ensure this ID exists
                'user_id' => 1, // Ensure this ID exists
            ],
            // Add more as needed
        ]);
    }
}
