<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = password_hash('12345', PASSWORD_DEFAULT);
        User::create([
            'name' => 'Pedro',
            'email' => 'pmbs@gmail.com',
            'password' => $password
        ]);
    }
}
