<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function detail($id)
    {
        $book = Book::find($id);
        return view('books.book_detail', compact('book'));
    }

    public function book_modify_view(Request $request)
    {
        $books = Book::where(['ISBN' => $request->modify_book])->get();
        return view('books.book_modify_detail', compact('books'));
    }

    public function book_modify(Request $request)
    {
        $books = Book::where(['ISBN'=>$request->isbn])->get();

         foreach ($books->all() as $book)
         {
            $book->name = $request->name;
            $book->author = $request->author;
            $book->kind = $request->kind;
            $book->location = $request->location;
            $book->repertory = $request->repertory;
            $book->price = $request->price;
            $book->intro = $request->intro;
            $book->save();
         }
         
         return view('admin.student_modify');
    }
}
