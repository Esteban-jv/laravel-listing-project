<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Esteban Juarez',
                'email' => 'zaorylight@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 'admin'
            ],
            [
                'name' => 'Jhon Normal',
                'email' => 'user.normal@gmail.com',
                'password' => Hash::make('password'),
                'user_type' => 'user'
            ],
        ]);
    }
}
