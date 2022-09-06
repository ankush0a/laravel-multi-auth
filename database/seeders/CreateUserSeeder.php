<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@laravel.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'status' => '1',
            'email_verified_at' => date(now()),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@laravel.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
            'status' => '1',
        ]);
    }
}
