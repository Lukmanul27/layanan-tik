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
    'name' => 'Aku Admin',
    'email' => 'admin@garutkab.go.id',
    'password' => bcrypt('password'),
]);
$adminUser->assignRole('admin');

// Membuat pengguna dengan peran "petugas"
$petugasUser = User::create([
    'name' => 'Aku Petugas',
    'email' => 'petugas@garutkab.go.id',
    'password' => bcrypt('password'),
]);
$petugasUser->assignRole('petugas');
    }
}

