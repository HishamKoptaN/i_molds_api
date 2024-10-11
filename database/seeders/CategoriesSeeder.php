<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Food', // فئة الطعام
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Electronics', // فئة الأجهزة الكهربائية
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'School Supplies', // فئة مستلزمات المدارس
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Fashion', // فئة الأزياء
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Home Appliances', // فئة الأجهزة المنزلية
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Health & Beauty', // فئة الصحة والجمال
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Furniture', // فئة الأثاث
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Toys', // فئة الألعاب
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Automotive', // فئة السيارات وملحقاتها
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Sports & Fitness', // فئة الرياضة واللياقة البدنية
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
