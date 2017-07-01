<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', 'SearchController@search');

Route::get('/book_detail/{id}', 'BookController@detail');

Route::post('/result', 'SearchController@result');

Route::get('/student_detail', 'StudentController@detail');
//Route::get('/stduent_modify/{account}', 'StudentController@modify_view');
//Route::post('/student_modify', 'StudentController@modify');

Route::get('/admin/borrow', 'AdminController@getBorrowForm');
Route::post('/admin/borrow','AdminController@borrow');

Route::get('/admin/giveback', 'AdminController@getGivebackForm');
Route::post('/admin/giveback', 'AdminController@giveback');

Route::get('/admin/create', 'AdminController@getCreateForm');
Route::post('/admin/create', "AdminController@create");

Route::get('/admin/admin_detail', 'AdminController@admin_detail');

Route::get('/test', 'TestController@getTest');
Route::post('/test', 'TestController@test');


//搜索结果框的大小固定