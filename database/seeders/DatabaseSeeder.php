<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            KelasSeeder::class,
            UpdateMahasiswaSeeder::class,
            MataKuliahSeeder::class,

        ]);
        Mahasiswa::factory(30)->create();
        Mahasiswa::create([
            'nim' => '2041720114',
            'nama' => 'Muhammad Lazuardi Timur',
            'kelas_id' => 5,
            'jurusan' => 'Teknik Informatika',
        ]);
        $this->call([

            Mahasiswa_mataKuliah::class,
        ]);
    }
}
