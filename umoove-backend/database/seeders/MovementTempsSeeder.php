<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementTempsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movement_temps')->insert([
            [
                'name' => 'Morning Run',
                'activity_id' => 1, // Ensure this ID exists
                'longitude' => -0.1276,
                'latitude' => 51.5072,
                'date_prise' => now()->toDateString(),
            ],
            // Add more as needed
        ]);
    }
}
