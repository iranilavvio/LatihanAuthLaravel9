<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = [
            'name' => 'Student',
            'email' => 'student@student.com',
            'password' => bcrypt('student'),
            'role' => 'student',
        ];

        \App\Models\User::create($attr);
    }
}
