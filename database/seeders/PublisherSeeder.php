<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Mizan',
            'slug' => 'mizan'
        ]);
        
        Publisher::create([
            'name' => 'Gramedia',
            'slug' => 'gramedia'
        ]);

        Publisher::create([
            'name' => 'Erlangga',
            'slug' => 'erlangga'
        ]);

    }
}
