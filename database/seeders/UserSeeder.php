<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insertOrIgnore([
            [
                'name' => 'Admin',
                'email' => 'admin@poltekborneomedistra.ac.id',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ],

            [
                'name' => 'Fajri Achmad Jafar',
                'email' => 'fajri@lecture.poltekborneomedistra.ac.id',
                'password' => Hash::make('password'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Fajar Saputra',
                'email' => 'fajar@student.poltekborneomedistra.ac.id',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa'
            ]
        ]);
    }
}
