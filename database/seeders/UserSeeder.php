<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();
        foreach ($roles as $role) {
            for ($i = 0; $i < 10; $i++) {
                User::factory()->create([
                    'role_id' => $role->id,
                ]);
            }
        }
    }
}
