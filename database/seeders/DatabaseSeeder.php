<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        Prodi::factory(10)->create();

        Mahasiswa::create([
            'nim' => 'E020322098',
            'nama' => 'Intan',
            'no_hp' => '089519043831',
            'alamat' => 'Jalan Perumnas',
            'foto' => 'E020322098.jpeg',
            'password' => '123',
            'prodi_id' => 1,
        ]);

        Mahasiswa::create([
            'nim' => 'E020322097',
            'nama' => 'Intan',
            'no_hp' =>'089519043831',
            'alamat' => 'Jalan Perumnas',
            'foto' => 'E020322098.jpeg',
            'password' => '123',
            'prodi_id' => 2,
        ]);

        Mahasiswa::factory(100)->create();
    }
}
