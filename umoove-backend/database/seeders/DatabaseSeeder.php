<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\CouponTypeController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ActivitiesSeeder::class,
            MovementTempsSeeder::class,
            UserSeeder::class,
            HistoriesSeeder::class,
            EntreprisesSeeder::class,
            CouponTypesSeeder::class,
            CouponsSeeder::class,
        ]);
    }
}
