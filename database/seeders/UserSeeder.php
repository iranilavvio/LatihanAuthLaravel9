<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $attr = [
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'role' => 'user',
        ];

        \App\Models\User::create($attr);
    }
}
