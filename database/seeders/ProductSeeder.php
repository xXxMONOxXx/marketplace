<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role_id', 1)->get();
        foreach ($users as $user) {
            for ($i = 0; $i < 10; $i++) {
                Product::factory()->create([
                    'seller_id' => $user->id,
                ]);
            }
        }
    }
}
