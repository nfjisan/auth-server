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
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456'),
        ]);

        // Another example user
        User::create([
            'name' => 'Md Jisan Ahmed',
            'email' => 'jisan@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $this->command->info('Users created successfully!');
    }
}
