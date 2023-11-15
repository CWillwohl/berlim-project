<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Caio Willwohl',
            'role_id' => 1,
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Yerab Larmarca',
            'role_id' => 2,
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);
    }
}
