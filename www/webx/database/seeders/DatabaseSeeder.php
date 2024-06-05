<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Pegawai::factory(3)->create();

        Pegawai::create([
            'nama' => 'sulhamzah',
            'nik' => '1479816491604',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'L',
            'alamat' => '1479816491604',

        ]);

        Pegawai::create([
            'nama' => 'jono',
            'nik' => '147981649160',
            'no_kk' => '147981649160',
            'jeniskelamin' => 'P',
            'alamat' => '147981649160',

        ]);

        Pegawai::create([
            'nama' => 'vino',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'L',
            'alamat' => '147981649',

        ]);
        Pegawai::create([
            'nama' => 'budi',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'P',
            'alamat' => '147981649',

        ]);
        Pegawai::create([
            'nama' => 'marwoto',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'L',
            'alamat' => '147981649',

        ]);
        Pegawai::create([
            'nama' => 'udin',
            'nik' => '14798164916',
            'no_kk' => '1479816491604',
            'jeniskelamin' => 'P',
            'alamat' => '147981649',

        ]);






    }
}
