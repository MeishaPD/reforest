<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'Bagaimana cara menanam pohon?',
            'answer' => 'Pilih lokasi yang cocok, gali lubang, dan tanam pohon dengan hati-hati.',
        ]);

        Faq::create([
            'question' => 'Kapan waktu terbaik untuk menanam pohon?',
            'answer' => 'Musim hujan adalah waktu terbaik untuk menanam pohon.',
        ]);
    }
}
