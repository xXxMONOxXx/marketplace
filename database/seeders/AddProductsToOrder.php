<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class AddProductsToOrder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        Order::all()->each(function ($order) use ($products) {
            $order->products()->attach($products->random(rand(1,4))->pluck('id')->toArray(), ['amount' => rand(1,5)]);
        });
    }
}
