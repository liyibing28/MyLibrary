<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function detail($id)
    {
        $book = Book::find($id);
        return view('books.book_detail', compact('book'));
    }
}
