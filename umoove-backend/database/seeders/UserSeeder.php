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
                'movement_temp_id' => 1,
        ]);

        DB::table('users')->insert([
                'name' => 'Admin Doe',
                'firstname' => 'Admin',
                'lastname' => 'Doe',
                'email' => 'admin@admin.com',
                'points' => 300,
                'password' => Hash::make('allo1234'),
        ]);

        DB::table('users')->insert([
                'name' => 'User Doe',
                'firstname' => 'User',
                'lastname' => 'Doe',
                'email' => 'user@user.com',
                'points' => 50,
                'password' => Hash::make('allo1234'),

        ]);
    }
}
