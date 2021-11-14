<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Nanti Kita Cerita Tentang Hari Ini',
            'synopsis' => 'Nanti Kita Cerita tentang Hari Ini (bahasa Inggris: One Day We\'ll Talk About Today) adalah film drama keluarga Indonesia tahun 2020 yang disutradarai oleh Angga Dwimas Sasongko. Film ini diadaptasi dari novel berjudul sama karya Marchella FP. ',
            'year' => '2020',
            'category_id' => '5',
            'author_id' => '5',
            'publisher_id' => '2'
        ]);

        Book::create([
            'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat by Mark Manson productnation',
            'synopsis' => 'Buku ini menjadi salah satu buku paling laris diantara banyak buku mengenai self improvement. Dalam buku ini, Mark Manson menuliskan bahwa, \“Kunci untuk kehidupan yang baik bukan tentang memedulikan lebih banyak hal tapi tentang memedulikan hal yang sederhana saja, hanya peduli tentang apa yang benar dan mendesak dan penting\”. Oleh karenanya buku cocok untuk para overthinker, sehingga bisa lebih memprioritaskan hal-hal untuk dipikirkan, sehingga tidak menjadi beban berlebih dalam kepala. productnation',
            'year' => '2020',
            'category_id' => '6',
            'author_id' => '6',
            'publisher_id' => '3'
        ]);
    }
}
