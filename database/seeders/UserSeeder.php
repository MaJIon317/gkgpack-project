<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => '123123123',
        ]);

        User::factory()->create([
            'role' => 'importer',
            'name' => 'Importer User',
            'email' => 'importer@mail.com',
            'password' => '123123123',
        ]);
        
        User::factory()->create([
            'role' => 'admin',
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => '123123123',
        ]);
    }
}
