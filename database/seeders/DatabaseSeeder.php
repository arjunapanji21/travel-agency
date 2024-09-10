<?php

namespace Database\Seeders;

use App\Models\DataKendaraan;
use App\Models\DataSopir;
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

        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        DataSopir::create([
            'nik' => rand(0000000000000000, 4899999999999999),
            'nama' => 'Amiruddin',
            'tmp_lahir' => 'Lambur',
            'tgl_lahir' => '1970-07-21',
            'jk' => 'Laki-laki',
            'gol_darah' => 'O',
            'alamat' => 'Lambur',
            'agama' => 'Islam',
            'status_perkawinan' => 'Kawin',
            'status_sopir' => 'Tetap',
        ]);
        DataSopir::create([
            'nik' => rand(0000000000000000, 4899999999999999),
            'nama' => 'Satria',
            'tmp_lahir' => 'Sabak',
            'tgl_lahir' => '1989-02-24',
            'jk' => 'Laki-laki',
            'gol_darah' => 'A',
            'alamat' => 'Sabak',
            'agama' => 'Islam',
            'status_perkawinan' => 'Kawin',
            'status_sopir' => 'Tetap',
        ]);
        DataSopir::create([
            'nik' => rand(0000000000000000, 4899999999999999),
            'nama' => 'Gaga',
            'tmp_lahir' => 'Jambi',
            'tgl_lahir' => '1990-11-09',
            'jk' => 'Laki-laki',
            'gol_darah' => 'O',
            'alamat' => 'Jambi',
            'agama' => 'Islam',
            'status_perkawinan' => 'Kawin',
            'status_sopir' => 'Tetap',
        ]);
        DataSopir::create([
            'nik' => rand(0000000000000000, 4899999999999999),
            'nama' => 'Taming',
            'tmp_lahir' => 'Sabak',
            'tgl_lahir' => '1988-04-05',
            'jk' => 'Laki-laki',
            'gol_darah' => 'AB',
            'alamat' => 'Sabak',
            'agama' => 'Islam',
            'status_perkawinan' => 'Kawin',
            'status_sopir' => 'Tetap',
        ]);
        DataSopir::create([
            'nik' => rand(0000000000000000, 4899999999999999),
            'nama' => 'Joni',
            'tmp_lahir' => 'Lambur',
            'tgl_lahir' => '1981-01-14',
            'jk' => 'Laki-laki',
            'gol_darah' => 'B',
            'alamat' => 'Lambur',
            'agama' => 'Islam',
            'status_perkawinan' => 'Kawin',
            'status_sopir' => 'Tetap',
        ]);

        DataKendaraan::create([
            'nama' => 'Sigra',
            'jenis' => 'Mobil',
            'nopol' => 'BH4421HQ',
            'max_penumpang' => 7,
        ]);
        DataKendaraan::create([
            'nama' => 'Avanza',
            'jenis' => 'Mobil',
            'nopol' => 'BH2128MJ',
            'max_penumpang' => 7,
        ]);
        DataKendaraan::create([
            'nama' => 'Innova',
            'jenis' => 'Mobil',
            'nopol' => 'BH3478YZ',
            'max_penumpang' => 7,
        ]);
        DataKendaraan::create([
            'nama' => 'Sigra',
            'jenis' => 'Mobil',
            'nopol' => 'BH8738MD',
            'max_penumpang' => 7,
        ]);
        DataKendaraan::create([
            'nama' => 'Avanza',
            'jenis' => 'Mobil',
            'nopol' => 'BH8782BJ',
            'max_penumpang' => 7,
        ]);
    }
}
