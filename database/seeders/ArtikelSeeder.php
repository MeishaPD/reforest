<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('user_id');

        Artikel::create([
            'Judul' => 'Panduan Menanam Pohon',
            'isi' => 'Ini adalah panduan lengkap tentang cara menanam pohon dengan baik.',
            'tanggal_upload' => now(),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Manfaat Pohon untuk Kehidupan',
            'isi' => 'Artikel ini membahas manfaat besar pohon untuk lingkungan dan manusia.',
            'tanggal_upload' => now()->subDays(2),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Cara Merawat Pohon Buah',
            'isi' => 'Panduan singkat untuk merawat pohon buah agar menghasilkan panen yang maksimal.',
            'tanggal_upload' => now()->subDays(5),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Pohon Langka di Indonesia',
            'isi' => 'Mengenal pohon-pohon langka yang hanya bisa ditemukan di Indonesia.',
            'tanggal_upload' => now()->subWeek(),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Mengatasi Penyakit pada Pohon',
            'isi' => 'Artikel ini memberikan tips tentang cara mengidentifikasi dan mengatasi penyakit pada pohon.',
            'tanggal_upload' => now()->subWeeks(2),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Keajaiban Pohon Baobab',
            'isi' => 'Baobab adalah pohon dengan banyak keunikan. Artikel ini membahasnya lebih dalam.',
            'tanggal_upload' => now()->subWeeks(3),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Pohon dalam Mitologi dan Budaya',
            'isi' => 'Bagaimana pohon memiliki peran penting dalam mitologi dan budaya di berbagai belahan dunia.',
            'tanggal_upload' => now()->subMonth(),
            'user_id' => $userIds->random(),
        ]);

        Artikel::create([
            'Judul' => 'Pohon Sebagai Penyerap Karbon',
            'isi' => 'Mengapa pohon menjadi solusi utama dalam menghadapi perubahan iklim?',
            'tanggal_upload' => now()->subMonths(2),
            'user_id' => $userIds->random(),
        ]);
    }
}
