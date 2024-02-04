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
                'reward_per_km' => 100,
                'max_speed' => 15.5,
            ],
            [
                'name' => 'STS bus',
                'description' => 'STS travel',
                'reward_per_km' => 50,
                'max_speed' => 30.5,
            ],
            [
                'name' => 'STM bus',
                'description' => 'STM travel',
                'reward_per_km' => 60,
                'max_speed' => 31.5,
            ],
            [
                'name' => 'STM metro',
                'description' => 'STM travel',
                'reward_per_km' => 90,
                'max_speed' => 60.5,
            ],

            // Add more as needed
        ]);
    }
}
