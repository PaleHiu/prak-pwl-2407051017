<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        MataKuliah::create([
            'nama_mk' => 'Pemrograman Web',
            'sks' => 3
        ]);

        MataKuliah::create([
            'nama_mk' => 'Basis Data',
            'sks' => 3
        ]);

        MataKuliah::create([
            'nama_mk' => 'Sistem Informasi',
            'sks' => 2
        ]);
    }
}
