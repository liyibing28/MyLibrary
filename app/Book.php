<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'ISBN', 'author', 'name', 'kind', 'location', 'repertory', 'price', 'intro', 'hot', 'borrowed_num', 'image'
    ];

//    public function get_hot_books()
//    {
//
//    }
//
//    public function get_searched_books($keyword)
//    {
//
//    }
}
