<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersSeeder extends

Seeder
{
    public function run(): void
    {
        DB::table('offers')->insert(
            [

                [
                    'name' => 'Carrefour',
                    'description' => 'خصومات ضخمة في كارفور مصر',
                    'store_id' => 1,
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/carrefour_egypt.jpg',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Hyper One',
                    'description' => 'عروض مذهلة في هايبر وان مصر',
                    'store_id' => 2,
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/hyber_offer.jpg',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Metro Market',
                    'description' => 'أفضل عروض Metro Market',
                    'store_id' => 3,
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/mettro_offer.jpg',
                    'category_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Spinney’s',
                    'description' => 'أقوى التخفيضات في Spinney’s مصر',
                    'store_id' => 4,
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/spinneys.jpg',
                    'category_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [

                    'name' => 'Ranin',
                    'description' => 'تخفيضات كبيرة في Ranin مصر',
                    'store_id' => 5,
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/ranin_offer.jpg',
                    'category_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Kheir Zaman',
                    'description' => 'تخفيضات كبيرة في Kheir Zaman مصر',
                    'store_id' => 6,
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdSoEaoEJmk-xGds6CAs7W-7j44TGb4AYMYg&s',
                    'category_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Raya',
                    'description' => 'عروض خاصة في Raya Electronics',
                    'store_id' => 7,
                    'image' => 'https://api.awfar-offers.com/storage/offers_images/raya_egypt.jpg',
                    'category_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'B.Tech',
                    'description' => 'خصومات B.Tech على الأجهزة المنزلية',
                    'store_id' => 8,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/b-teck.jpg',
                    'category_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'El Araby Group',
                    'description' => 'عروض مجموعة العربي على الأجهزة الكهربائية',
                    'store_id' => 9,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/araby.jpg',
                    'category_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Al Tayebat',
                    'description' => 'عروض مميزة في Al Tayebat',
                    'store_id' => 10,
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf1xl2168QPWUfSQ5lCp8xbVAvjMKsm6UlDw&s',
                    'category_id' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Hyper Panda',
                    'description' => 'عروض Hyper Panda مصر',
                    'store_id' => 11,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/hyper_pand.jpg',
                    'category_id' => 7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Panda',
                    'description' => 'خصومات هائلة في Panda السعودية',
                    'store_id' => 12,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/panda.png',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Othaim',
                    'description' => 'عروض خاصة في Othaim السعودية',
                    'store_id' => 13,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/othaim_saudi.jpg',
                    'category_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Danube',
                    'description' => 'عروض مذهلة في Danube السعودية',
                    'store_id' => 14,
                    'image' => 'https://www.bindawoodholding.com/wp-content/uploads/2021/09/Danoub-in-Makkah.png',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Carrefour',
                    'description' => 'عروض حصرية في Carrefour السعودية',
                    'store_id' => 15,
                    'image' => 'https://cdn.linkaraby.com/YewOjwGF/Ys83FpHR.jpg',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Extra Stores',
                    'description' => 'أفضل عروض Extra Stores في السعودية',
                    'store_id' => 16,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/extra_stores.jpg',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Jarir Bookstore',
                    'description' => 'خصومات Jarir Bookstore على الكتب والإلكترونيات',
                    'store_id' => 17,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/gareer.png',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Al Nahdi',
                    'description' => 'عروض Al Nahdi على المستلزمات الطبية',
                    'store_id' => 18,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/nahdi.png',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'SACO',
                    'description' => 'تخفيضات SACO السعودية على الأدوات المنزلية',
                    'store_id' => 19,
                    'image' => 'https://api.awfar-offers.com/storage/stors_images/sacoo.png',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Al Bandar',
                    'description' => 'تخفيضات على المواد الغذائية في Al Bandar',
                    'store_id' => 20,
                    'image' => 'https://www.d2020.net/uploads/1664728787b60258974f66f89dbb217fde68351698a1541b49.jpg',
                    'category_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
