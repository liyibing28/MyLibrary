<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = 'borrow';

    protected $fillable = [
        'user_id', 'book_id', 'borrow_time', 'borrow_date', 'is_expire', 'deadline', 'deleted'
    ];
}
