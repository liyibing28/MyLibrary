<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use App\User;
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

     public function modify_view(Request $request)
     {
         //$student = Auth::where(['account' => $request->student_account])->get(1);
         //$student = DB::table('users')->where('account', '=', $request->student_account)->get();
         $student = User::where(['account' => $request->student_account])->get();
         return view('student.student_modify_detail', compact('student'));
     }

     public function modify(Request $request)
     {
         $student = User::where(['account'=>$request->account])->get();

         foreach ($student->all() as $user)
         {
            $user->name = $request->name;
            $user->password = $request->password;
            $user->name = $request->name;
            $user->class = $request->class;
            $user->speciality = $request->speciality;
            $user->sex = $request->sex;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->save();
         }
         
         return view('admin.student_modify');
     }

}
