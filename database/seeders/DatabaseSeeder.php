<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(
            [
                CountriesSeeder::class,
                GovernoratesSeeder::class,
                StoresSeeder::class,
                CategoriesSeeder::class,
                OffersSeeder::class,
                // NotificationsSeeder::class,
                // MessagesSeeder::class,
                // SettingSeeder::class,
                // ChatSeeder::class,
                // PermissionsSeeder::class,
                // RolesAndPermissionsSeeder::class,
            ],
        );
    }
}
