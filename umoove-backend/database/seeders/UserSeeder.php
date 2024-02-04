<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@exemple.com',
            'points' => 100,
            'password' => Hash::make('allo1234'),
            'movement_temp_id' => 1, // Ensure this ID exists or set to `null`
            // Assume `movement_temp_id` is nullable or set to an existing ID
        ]);
    }
}
