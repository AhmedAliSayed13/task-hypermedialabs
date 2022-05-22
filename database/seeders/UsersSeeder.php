<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            User::create([
                "name" => 'Admin',
                "email" => 'admin@gmail.com',
                "password" => Hash::make('123456789'),
                "is_admin" => 1
            ]);
            User::create([
                "name" => 'User',
                "email" => 'user@gmail.com',
                "password" => Hash::make('123456789'),
                "is_admin" => 0
            ]);
        
    }
}
