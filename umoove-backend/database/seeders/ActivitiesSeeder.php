<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activities')->insert([
            [
                'name' => 'Running',
                'description' => 'Running activity',
                'reward_per_km' => 10,
                'max_speed' => 15.5,
            ],
            // Add more as needed
        ]);
    }
}
