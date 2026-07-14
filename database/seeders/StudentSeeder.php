<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insertOrIgnore([
            'user_id' => 3,
            'major_id' => 1,
            'nim' => '11181007',
            'email' => 'fajar@student.poltekborneomedistra.ac.id',
            'phone' => '08123456789',
            'name' => 'Fajar Saputra',
            'place_of_birth' => 'Contoh',
            'birth_date' => '2000-01-01',
            'address' => 'Jl. Contoh, Contoh, Contoh',
            'gender' => 'laki_laki',
            'academic_year' => '2023',
            'term' => '1',
        ]);
    }
}
