<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use App\Http\Requests\BorrowRequest;
use App\Http\Requests\CreateRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin_detail()
    {
        $id = Auth::user()->id;
        $borrow_book_records = Borrow::where(['user_id'=>$id, 'deleted'=>0])->take(4)->get();
        $expire_num = Borrow::where(['user_id'=>$id, 'is_expire'=>1, 'deleted'=>0])->count();
        $borrow_books = array();

        foreach ($borrow_book_records as $borrow_book_record){
            $book = Book::find($borrow_book_record->book_id);
            $record = array('name'=>$book->name, 'borrow_date'=>$borrow_book_record->borrow_date, 'deadline'=>$borrow_book_record->deadline);
            array_push($borrow_books, $record);
        }

        return view('admin.admin_detail', compact('borrow_books', 'expire_num'));
    }

    public function getBorrowForm()
    {
        return view('admin.borrow');
    }

    /**
     * @param BorrowRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function borrow(BorrowRequest $request)
    {
        $students = User::where('account', '=', $request->student_account)->get();
        $books = Book::where('ISBN', '=', $request->book_isbn)->get();
        if(!isset($students[0])){
            return redirect()->back()->withInput()->withErrors(['student_account'=>'we do not have this student']);
        }
        if(!isset($books[0])){
            return redirect()->back()->withInput()->withErrors(['book_isbn'=>'we do not have this book']);
        }
        $student = $students[0];
        $book = $books[0];

        if($book->repertory == $book->borrowed_num){
            return redirect()->back()->withInput()->withErrors(['book_isbn'=>'this book have no repertory']);
        }
        $borrow_expire_num = Borrow::where(['user_id'=>$student->id, 'is_expire'=>1, 'deleted'=>0])->count();
        if ($borrow_expire_num != 0 || $student->book_left == 0){
            $student->borrowable = 0;
            $student->save();
            return redirect()->back()->withInput()->withErrors(['student_account'=>'this student can not borrow any book']);
        }
        $borrow_repeat = Borrow::where(['user_id'=>$student->id, 'book_id'=>$book->id, 'is_expire'=>0, 'deleted'=>0])->count();
        if ($borrow_repeat != 0){
            return redirect()->back()->withInput()->withErrors(['student_account'=>'this student already have this book']);
        }
        Borrow::create([
            'user_id' => $student->id,
            'book_id' => $book->id,
            'borrow_time' => 3,
            'borrow_date' => Carbon::now()->toDateString(),
            'is_expire' => 0,
            'deadline' => Carbon::now()->addMonth(3)->toDateString(),
            'deleted' => 0
        ]);

        $student->book_left = $student->book_left - 1;
        $book->borrowed_num = $book->borrowed_num + 1;
        $book->hot = $book->hot + 1;
        $student->save();
        $book->save();

        return redirect()->back()->withInput()->withErrors(['success'=>'succeed']);

    }

    public function getGivebackForm()
    {
        return view('admin.giveback');
    }

    public function giveback(BorrowRequest $request)
    {
        $students = User::where('account', '=', $request->student_account)->get();
        $books = Book::where('ISBN', '=', $request->book_isbn)->get();

        if(!isset($students[0])){
            return redirect()->back()->withInput()->withErrors(['student_account'=>'we do not have this student']);
        }

        if(!isset($books[0])){
            return redirect()->back()->withInput()->withErrors(['book_isbn'=>'we do not have this book']);
        }

        $student = $students[0];
        $book = $books[0];

        $borrow_records = Borrow::where(['user_id'=>$student->id, 'book_id'=>$book->id, 'deleted'=>0])->get();

        if(!isset($borrow_records[0])){
            return redirect()->back()->withInput()->withErrors(['book_isbn'=>'we do not have this record']);
        }

        $borrow_record = $borrow_records[0];
        $borrow_record->deleted = 1;

        $student->book_left = $student->book_left + 1;
        $book->borrowed_num = $book->borrowed_num - 1;

        $borrow_record->save();
        $book->save();
        $student->save();

        return redirect()->back();

        //判断是否有此记录
        //有 删除最早的一天
        //并且学生可借书增加一 相应的图书借出数减少一
    }

    public function getCreateForm()
    {
        return view('admin.create');
    }

    public function create(CreateRequest $request)
    {
        $images = $request->file();

        $img = $images['image'];
        $extension = $img->getClientOriginalExtension();

        if($extension == 'jpg' || $extension == 'png'){

            $file_name = $img->getFileName();
            $img_name = $file_name . '.' . $extension;

            Book::create([
                'ISBN' => $request->isbn,
                'author' => $request->author,
                'name' => $request->name,
                'kind' => $request->kind,
                'location' => $request->location,
                'repertory' => $request->repertory,
                'price' => $request->price,
                'intro' => $request->intro,
                'hot' => 0,
                'borrowed_num' => 0,
                'image' => $img_name,
            ]);

            $img->move('/Users/hanjianhao/Desktop/laravel/Library/public/img/books', $img_name);

            return redirect()->back()->withInput()->withErrors(['success'=>'succeed to create book']);
        }

        return redirect()->back()->withInput()->withErrors(['picture_format'=>'picture format error']);
    }


    public function getStudentModifyForm()
    {
        return view('admin.student_modify');
    }
    public function getBookModifyForm()
    {
        return view('admin.book_modify');
    }
}
