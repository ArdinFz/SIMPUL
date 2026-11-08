<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Sekolah
        User::create([
            'name' => 'Admin Sekolah',
            'email' => 'admin@sdn2kadipiro.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Akun Guru
        User::create([
            'name' => 'Budi Santoso, S.Pd.',
            'email' => 'guru@sdn2kadipiro.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'guru',
        ]);

        // 3. Data Master Kelas
        $kelas1 = Classroom::create(['nama_kelas' => 'Kelas 1A']);
        Classroom::create(['nama_kelas' => 'Kelas 2A']);

        // 4. Dummy Data Siswa SDN 2 Kadipiro
        Student::create([
            'classroom_id' => $kelas1->id,
            'nis' => '2026001',
            'nama_lengkap' => 'Ahmad Rizky',
            'jenis_kelamin' => 'L',
        ]);

        Student::create([
            'classroom_id' => $kelas1->id,
            'nis' => '2026002',
            'nama_lengkap' => 'Siti Nurhaliza',
            'jenis_kelamin' => 'P',
        ]);
    }
}