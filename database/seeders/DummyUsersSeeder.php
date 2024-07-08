<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Engineer',
                'email' => 'engineer@gmail.com',
                'role' => 'engineer',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Audit',
                'email' => 'audit@gmail.com',
                'role' => 'audit',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'user 01',
                'email' => 'user.01@gmail.com',
                'role' => 'user',
                'password' => bcrypt('12345'),
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
