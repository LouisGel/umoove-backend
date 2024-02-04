<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coupons')->insert([
            [
                'date_used' => null,
                'coupon_type_id' => 1,
                'user_id' => 1,
                'code' => 'UNIQUECODE123',
            ],
            [
                'date_used' => null,
                'coupon_type_id' => 2, // Ensure this ID exists
                'user_id' => 1, // Ensure this ID exists
                'code' => 'UNIQUECODE124',
            ],
            [
                'date_used' => null,
                'coupon_type_id' => 3, // Ensure this ID exists
                'user_id' => 1, // Ensure this ID exists
                'code' => 'FreeBusPass123',
            ],
            [
                'date_used' => null,
                'coupon_type_id' => 1, // Ensure this ID exists
                'user_id' => 2, // Ensure this ID exists
                'code' => 'UNIQUECODE1235',
            ],
        ]);
    }
}
