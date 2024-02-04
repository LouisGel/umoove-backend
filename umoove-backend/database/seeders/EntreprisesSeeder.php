<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntreprisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entreprises')->insert([
            [
                'name' => 'Sample Company',
                'description' => 'A sample company description.',
            ],
            [
                'name' => 'IGA',
                'description' => 'Compagnie d\'alimentation.',
            ],
            [
                'name' => 'STS',
                'description' => 'Société de transport de Sherbrooke.',
            ],
        ]);
    }
}
