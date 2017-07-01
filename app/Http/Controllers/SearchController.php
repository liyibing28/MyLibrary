<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $hot_books = Book::where('hot', '>=', 0)->orderBy('hot', 'desc')->take(5)->get();
        return view('search.search', compact('hot_books'));
    }

    public function result(Request $request)
    {
        switch ($request->category)
        {
            case '1':
                $books = Book::where('name', 'like', '%'.$request->keyword.'%')->get();
                break;
            case '2':
                $books = Book::where('author', 'like', '%'.$request->keyword.'%')->get();
                break;
            case '3':
                $books = Book::where('kind', 'like', '%'.$request->keyword.'%')->get();
                break;
            default:
                $books = Book::where('name', 'like', '%'.$request->keyword.'%')->get();
                break;
        }
        return view('search.result', compact('books'));
    }
}
