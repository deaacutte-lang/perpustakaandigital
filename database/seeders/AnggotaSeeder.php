<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ini data yang mau kita masukin, bentuknya HARUS array [ ]
        $data = [
            [
                'nama' => 'Qalea Alzahra',
                'email' => 'qalea@gmail.com',
                'password' => Hash::make('qalea123'),
            ],
            [
                'nama' => 'Budi Santoso',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('budi123'),
            ],
        ];

        // Ini bagian yang tadi error karena datanya kosong/salah tipe
        foreach ($data as $user) {
            Anggota::create($user);
        }
    }
}