<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function detail()
    {
        $id = Auth::user()->id;
        $borrow_book_records = Borrow::where(['user_id'=>$id, 'deleted'=>0])->get();
        $expire_num = Borrow::where(['user_id'=>$id, 'is_expire'=>1, 'deleted'=>0])->count();
        $borrow_books = array();

        foreach ($borrow_book_records as $borrow_book_record){
            $book = Book::find($borrow_book_record->book_id);
            $record = array('name'=>$book->name, 'borrow_date'=>$borrow_book_record->borrow_date, 'deadline'=>$borrow_book_record->deadline);
            array_push($borrow_books, $record);
        }
        return view('student.student_detail', compact('borrow_books', 'expire_num'));
    }

    // public function modify_view($account)
    // {
    //     $student = Auth::where(['account'=>$account])->get(1);
    //     return view('student.student_modify', compact('student'));
    // }

    // public function modify(Request $request)
    // {
    //     $student = Auth:where(['account'=>$request->name])->get(1);
    //     $student->name = $request->name;
    //     $student->save();
    // }

}
