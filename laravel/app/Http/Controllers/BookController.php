<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = \App\Models\Book::all();
        return view('books.index', compact('books'));
    }
}
