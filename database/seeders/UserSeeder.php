<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna dengan peran "superadmin"
$adminUser = User::create([
    'name' => 'Superadmin Name',
    'email' => 'superadmin@example.com',
    'password' => bcrypt('password'),
]);
$adminUser->assignRole('admin');

// Membuat pengguna dengan peran "petugas"
$petugasUser = User::create([
    'name' => 'Petugas Name',
    'email' => 'petugas@example.com',
    'password' => bcrypt('password'),
]);
$petugasUser->assignRole('petugas');
    }
}

