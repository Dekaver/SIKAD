<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::insertOrIgnore([
            [
                'id' => 2,
                'name' => 'Informatika',
                'code' => 'IF',
                'code_number' => '01',
                'description' => 'Program studi yang berfokus pada ilmu komputer dan pengembangan perangkat lunak.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Sistem Informasi',
                'code' => 'SI',
                'code_number' => '02',
                'description' => 'Program studi yang berfokus pada sistem informasi dan bisnis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Teknik Komputer',
                'code' => 'TK',
                'code_number' => '03',
                'description' => 'Program studi yang mempelajari perangkat keras dan perangkat lunak komputer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Teknik Elektro',
                'code' => 'TE',
                'code_number' => '04',
                'description' => 'Program studi yang mempelajari sistem kelistrikan dan elektronika.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Teknik Sipil',
                'code' => 'TS',
                'code_number' => '05',
                'description' => 'Program studi yang mempelajari perencanaan dan pembangunan infrastruktur.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Teknik Industri',
                'code' => 'TI',
                'code_number' => '06',
                'description' => 'Program studi yang berfokus pada optimasi sistem industri dan manufaktur.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Manajemen',
                'code' => 'MN',
                'code_number' => '07',
                'description' => 'Program studi yang mempelajari pengelolaan organisasi dan bisnis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'name' => 'Akuntansi',
                'code' => 'AK',
                'code_number' => '08',
                'description' => 'Program studi yang mempelajari pencatatan dan pelaporan keuangan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'name' => 'Hukum',
                'code' => 'HK',
                'code_number' => '09',
                'description' => 'Program studi yang mempelajari ilmu hukum dan peraturan perundang-undangan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'name' => 'Ilmu Komunikasi',
                'code' => 'IK',
                'code_number' => '10',
                'description' => 'Program studi yang mempelajari komunikasi massa dan media.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'name' => 'Administrasi Publik',
                'code' => 'AP',
                'code_number' => '11',
                'description' => 'Program studi yang mempelajari administrasi pemerintahan dan pelayanan publik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
