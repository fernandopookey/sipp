<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'full_name' => 'Super Admin',
            'user_name' => 'admin',
            'nip' => '123456789',
            'email' => 'admin@gmail.com',
            'password'  => bcrypt('1'),
        ]);
    }
}
