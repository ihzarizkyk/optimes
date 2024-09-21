<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ihza',
            'username' => 'ihzarizky',
            'role' => 'admin',
            'email' => 'ihza@mail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'zaih',
            'username' => 'zaihhh',
            'role' => 'manager',
            'email' => 'zaih@mail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'anas',
            'username' => 'anasss',
            'role' => 'staff',
            'email' => 'anas@mail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
