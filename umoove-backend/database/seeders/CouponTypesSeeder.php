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
                'entreprise_id' => 1, // Ensure this ID exists in your `entreprises` table
                'token' => 'UNIQUECODE10',
                'max' => 100,
            ],
            // Add more as needed
        ]);
    }
}
