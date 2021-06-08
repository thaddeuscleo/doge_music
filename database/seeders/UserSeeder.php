<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create();
        User::factory()->count(1)->state([
            'email' => "admin@email.com",
            'password' => bcrypt("admin"),
            'role' => User::$ADMIN_ROLE,
        ])->create();
        User::factory()->count(1)->state([
            'email' => "user@email.com",
            'password' => bcrypt("user"),
            'role' => User::$USER_ROLE,
        ])->create();
    }
}
