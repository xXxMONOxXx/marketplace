<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role_id', 2)->get();
        $products = Product::all();
        foreach ($products as $product){
            foreach ($users as $user) {
                $create = rand(1, 10);
                if ($create == 5) {
                    Review::factory()->create([
                        'reviewer_id' => $user->id,
                        'product_id' => $product->id,
                    ]);
                }
            }
        }
    }
}
