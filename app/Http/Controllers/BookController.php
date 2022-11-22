<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $books = Book::query()->paginate(12);
        return view("home", [
            "books" => $books
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('detail-book', [
            "book" => $book->load(["publisher", "categories"])
        ]);
    }
}
