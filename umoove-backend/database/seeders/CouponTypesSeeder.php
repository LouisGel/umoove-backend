<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coupon_types')->insert([
            [
                'price' => 500,
                'name' => 'Discount 10%',
                'description' => 'Get 10% off on your next purchase',
                'entreprise_id' => 1,
                'token' => 'UNIQUECODE10',
                'max' => 100,
            ],
            [
                'price' => 200,
                'name' => 'Discount 10%',
                'description' => 'Get 10% off on your next purchase',
                'entreprise_id' => 2, // Ensure this ID exists in your `entreprises` table
                'token' => 'IGA10',
                'max' => 100,
            ],
            [
                'price' => 1000,
                'name' => 'Free bus pass',
                'description' => 'Get a free bus pass for the month',
                'entreprise_id' => 3, // Ensure this ID exists in your `entreprises` table
                'token' => 'STSPASS100',
                'max' => 1000,
            ],
        ]);
    }
}
