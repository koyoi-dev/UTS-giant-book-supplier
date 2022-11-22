<?php

namespace App\Http\Controllers;

use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::query()->paginate(12);
        return view("list-publisher", [
            "publishers" => $publishers
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view("detail-publisher", [
            "publisher" => $publisher
        ]);
    }
}
