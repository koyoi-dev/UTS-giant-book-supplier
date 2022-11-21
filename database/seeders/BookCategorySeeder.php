<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $books = Book::all();
        $categories = Category::all();

        $books->each(function ($book) use ($categories) {
            $book->categories()->attach(
                $categories->random(rand(1, $categories->count()))->pluck('id')->toArray()
            );
        });
    }
}
