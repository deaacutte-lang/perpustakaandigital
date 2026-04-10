<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Buku sesuai screenshot yang lo mau
        $data = [
            [
                'id_buku' => 'bis01',
                'judul_buku' => 'Business is Fun',
                'pengarang' => 'Coach Yohanes G. Pauly',
                'penerbit' => 'KMO Indonesia',
                'tahun' => '2016',
                'kategori' => 'bisnis',
                'gambar' => 'business_is_fun.jpg'
            ],
            [
                'id_buku' => 'bis02',
                'judul_buku' => 'Digital Marketing Strategy',
                'pengarang' => 'Simon Kingsnorth',
                'penerbit' => 'Kogan Page',
                'tahun' => '2019',
                'kategori' => 'bisnis',
                'gambar' => 'digital_marketing.jpg'
            ],
            [
                'id_buku' => 'fil01',
                'judul_buku' => 'Filosofi Teras',
                'pengarang' => 'Henry Manampiring',
                'penerbit' => 'Kompas',
                'tahun' => '2019',
                'kategori' => 'filsafat',
                'gambar' => 'filosofi_teras.jpg'
            ],
            [
                'id_buku' => 'fil02',
                'judul_buku' => 'Sejarah Dunia yang Disembunyikan',
                'pengarang' => 'Jonathan Black',
                'penerbit' => 'Pustaka Alvabet',
                'tahun' => '2015',
                'kategori' => 'filsafat',
                'gambar' => 'sejarah_dunia.jpg'
            ],
            [
                'id_buku' => 'inf01',
                'judul_buku' => 'Dasar-dasar Pemrograman Web',
                'pengarang' => 'Sandhika Galih',
                'penerbit' => 'Informatika',
                'tahun' => '2020',
                'kategori' => 'informatika',
                'gambar' => 'pemrograman_web.jpg'
            ],
        ];

        foreach ($data as $item) {
            Buku::create($item);
        }
    }
}