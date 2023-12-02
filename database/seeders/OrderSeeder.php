<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role_id', 2)->get();
        foreach ($users as $user) {
            for ($i = 0; $i < 5; $i++) {
                if (rand(1, 5) == 5) {
                    Order::factory()->create([
                        'user_id' => $user->id,
                    ]);
                }
            }
        }
    }
}
