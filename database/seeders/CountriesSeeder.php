<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('countries')->insert(
            [
                [
                    'name' => 'Egypt',
                    'flag' => 'https://api.awfar-offers.com/storage/stores_images/green_hyper_market.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Saudia',
                    'flag' => 'https://api.awfar-offers.com/storage/stores_images/green_hyper_market.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Qatar',
                    'flag' => 'https://api.awfar-offers.com/storage/stores_images/green_hyper_market.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],


            ],
        );
    }
}
