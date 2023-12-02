<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if ((env('APP_ENV') != 'local') && !env('APP_DEBUG')) {
            return;
        }
        $this->call(
            [
                RoleSeeder::class,
                UserSeeder::class,
                CategorySeeder::class,
                ProductSeeder::class,
                AddressSeeder::class,
                AddCategoriesToProducts::class,
                ReviewSeeder::class,
                OrderSeeder::class,
                AddProductsToOrder::class,
            ]
        );
    }
}
