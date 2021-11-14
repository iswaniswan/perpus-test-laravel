<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name' => 'Emha Ainun Nadjib',
            'slug' => 'emha-ainun-nadjib'
        ]);
        
        Author::create([
            'name' => 'J.K Rowlings',
            'slug' => 'j-k-rowlings'
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'slug' => 'tere-liye'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'slug' => 'andrea-hirata'
        ]);

        Author::create([
            'name' => 'Jenny Jusuf',
            'slug' => 'jenny-jusuf'
        ]);

        Author::create([
            'name' => 'Mark Manson',
            'slug' => 'mark-manson'
        ]);

    }
}
