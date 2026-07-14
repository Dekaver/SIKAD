<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lecturer::insertOrIgnore([
            'user_id' => 2,
            'major_id' => 1,
            'name' => 'Fajri Achmad Jafar',
            'email' => 'fajri@lecturer.poltekborneomedistra.ac.id',
            'phone' => '08123456789',
            'address' => 'Jl. Contoh, Contoh, Contoh',
            'gender' => 'laki_laki',
            'nidn' => '123456789',
            'place_of_birth' => 'Contoh',
            'birth_date' => '2000-01-01',
        ]);
    }
}
