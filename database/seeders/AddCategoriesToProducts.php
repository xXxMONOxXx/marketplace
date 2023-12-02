<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class AddCategoriesToProducts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        Product::all()->each(function ($product) use ($categories) {
            $product->categories()->attach($categories->random(rand(1, 10))->pluck('id')->toArray());
        });
    }
}
