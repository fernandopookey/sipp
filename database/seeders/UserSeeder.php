<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'full_name' => 'Super Admin',
        //     'user_name' => 'sa',
        //     'email' => 'superadmin@gmail.com',
        //     'nip' => '123456789',
        //     'password'  => bcrypt('1'),
        // ]);

        DB::table('users')->insert([
            'full_name' => 'Admin',
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'nip' => '123456789',
            'password'  => bcrypt('2'),
        ]);
    }
}
