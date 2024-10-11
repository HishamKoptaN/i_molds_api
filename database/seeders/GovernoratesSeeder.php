<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GovernoratesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('governorates')->insert(
            [
                [
                    'name' => 'Egypt',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [

                    'name' => 'Cairo',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Giza',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '6 October',
                    'country_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

            ],
        );
    }
}
