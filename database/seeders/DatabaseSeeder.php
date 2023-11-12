<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '1',
            'status' => 'active',
        ]);
        User::create([
            'name' => 'Admin PPID',
            'email' => 'adminppid@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '2',
            'status' => 'active',
        ]);
        User::create([
            'name' => 'Admin Sisda',
            'email' => 'adminsisda@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => '3',
            'status' => 'active',
        ]);
        Role::create([
            'name' => 'Super Admin',
        ]);
        role::create([
            'name' => 'Admin',
        ]);
        role::create([
            'name' => 'Admin Sisda',
        ]);
    }
}
