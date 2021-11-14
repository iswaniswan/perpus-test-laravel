<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "name" => "Drama",
            "slug" => "drama"
        ]);

        Category::create([
            "name" => "Fiksi Ilmiah",
            "slug" => "fiksi-ilmiah"
        ]);

        Category::create([
            "name" => "Horror",
            "slug" => "horor"
        ]);

        Category::create([
            "name" => "Biografi",
            "slug" => "biografi"
        ]);

        Category::create([
            "name" => "Novel",
            "slug" => "novel"
        ]);

        Category::create([
            "name" => "Motivasi",
            "slug" => "motivasi"
        ]);
    }
}
