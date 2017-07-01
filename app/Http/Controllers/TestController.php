<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use App\Http\Requests\CreateRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    public function test(Request $request)
    {
//        $img_path = '/Users/hanjianhao/Desktop/laravel';
//        $img = $request->file();
//        $img2 = $img['image'];
//
//        $a = $request->author;
//        var_dump($img->getMimeType()); ok
//        var_dump($img2->getFileName());
//        var_dump($img->getRealPath());
//        var_dump($img->getClientOriginalExtension());
//        var_dump(Carbon::now()->toDateTimeString());
//        dd($a);

//        $time = Carbon::now()->toFormattedDateString();
//        var_dump($time);

        $images = $request->file();

        $img = $images['image'];
        $extension = $img->getClientOriginalExtension();

        var_dump($extension);

        if($extension == 'jpg' || $extension == 'png'){

            $file_name = $img->getFileName();
            $img_name = $file_name . '.' . $extension;

            $img->move('/Users/hanjianhao/Desktop/laravel/Library/public/img', $img_name);
        }
    }

    public function getTest()
    {
        return view('test');
    }
}
