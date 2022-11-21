<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    static $categories = [
        "Action & Adventure",
        "Mystery",
        "Horror",
        "Thriller",
        "Romance",
        "Contemporary Fiction",
        "Graphic Novel",
        "Light Novel",
        "Manga",
        "Art & Photography"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$categories as $category) {
            Category::query()->create(["name" => $category]);
        }
    }
}
