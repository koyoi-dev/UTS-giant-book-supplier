<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class BookPublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::factory()
            ->count(20)
            ->has(Book::factory()->count(5), "books")
            ->create();
    }
}
