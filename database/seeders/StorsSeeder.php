<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stores')->insert(
            [
                // 1
                [
                    'name' => 'Carrefour',
                    'image' => 'https://api.awfar-offers.com/storage/stores_images/carrefour.png',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 2
                [
                    'name' => 'Hyper one',
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/hyber_offer.jpg',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 3
                [
                    'name' => 'Metro market',
                    'image' =>  'https://api.awfar-offers.com/storage/stores_images/metro_market.png',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 4
                [
                    'name' => 'Spinney’s',
                    'image' => '',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 5
                [
                    'name' => 'Ranin',
                    'image' => 'https://api.awfar-offers.com/storage/stores_images/ranin.png',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 6
                [
                    'name' => 'Kheir Zaman',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdSoEaoEJmk-xGds6CAs7W-7j44TGb4AYMYg&s',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 7
                [
                    'name' => 'Bander Market',
                    'image' => 'https://www.d2020.net/uploads/1664728787b60258974f66f89dbb217fde68351698a1541b49.jpg',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 8
                [
                    'name' =>  'B.Tech',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/b-teck.jpg',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 9
                [
                    'name' => 'El Araby Group',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/araby.jpg',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 10
                [
                    'name' => 'Al Tayebat',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf1xl2168QPWUfSQ5lCp8xbVAvjMKsm6UlDw&s',
                    'country_id' => 1,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 11
                [
                    'name' =>  'Hyper Panda',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/hyper_pand.jpg',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 12
                [
                    'name' => 'Panda',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/panda.png',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 13
                [
                    'name' => 'Othaim',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/othaim_saudi.jpg',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 14
                [
                    'name' => 'Danube',
                    'image' => 'https://www.bindawoodholding.com/wp-content/uploads/2021/09/Danoub-in-Makkah.png',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 16
                [
                    'name' => 'Carrefour',
                    'image' => 'https://cdn.linkaraby.com/YewOjwGF/Ys83FpHR.jpg',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 16
                [
                    'name' =>  'Extra Stores',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/extra_stores.jpg',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 17
                [
                    'name' =>  'Jarir Bookstore',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/gareer.png',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 18
                [
                    'name' =>  'Al Nahdi',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/nahdi.png',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 19
                [
                    'name' =>  'SACO',
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/sacoo.png',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // 20
                [
                    'name' => 'Al Bandar',
                    'image' =>  'https://www.d2020.net/uploads/1664728787b60258974f66f89dbb217fde68351698a1541b49.jpg',
                    'country_id' => 2,
                    'governorate_id' => 1,
                    'place' => 'null',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
