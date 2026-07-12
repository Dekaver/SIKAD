<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@poltekborneomedistra.ac.id',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Fajri Achmad Jafar',
            'email' => 'fajri@lecture.poltekborneomedistra.ac.id',
            'password' => Hash::make('password'),
            'role' => 'dosen'
        ]);

        DB::table('users')->insert([
            'name' => 'Fajar Saputra',
            'email' => 'fajar@student.poltekborneomedistra.ac.id',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa'
        ]);
    }
}
