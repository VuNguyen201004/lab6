<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'fullname' => 'Admin User',
                'username' => 'adminuser',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'admin',
                'active' => true,
            ],
            [
                'fullname' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => 'janesmith@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'Robert Johnson',
                'username' => 'robertjohnson',
                'email' => 'robertjohnson@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => false,
            ],
            [
                'fullname' => 'Emily Davis',
                'username' => 'emilydavis',
                'email' => 'emilydavis@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'Michael Brown',
                'username' => 'michaelbrown',
                'email' => 'michaelbrown@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'Sarah Wilson',
                'username' => 'sarahwilson',
                'email' => 'sarahwilson@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'William Martinez',
                'username' => 'williammartinez',
                'email' => 'williammartinez@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'Jessica Garcia',
                'username' => 'jessicagarcia',
                'email' => 'jessicagarcia@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
            [
                'fullname' => 'David Martinez',
                'username' => 'davidmartinez',
                'email' => 'davidmartinez@example.com',
                'password' => Hash::make('password'),
                'avatar' => null,
                'role' => 'user',
                'active' => true,
            ],
        ]);
    }
}
