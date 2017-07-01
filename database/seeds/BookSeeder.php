<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Book::create([
            'ISBN' => '978-7-301-04511-4',
            'author' => '赵敦华',
            'name' => '现代西方哲学新编',
            'kind' => '哲学',
            'location' => '3楼23架',
            'repertory' => '10',
            'price' => '27.5',
            'intro' => '好书，真的好书',
            'hot' => '0',
            'borrowed_num' => '0',
            'image' => 'Users/hanjianhao/Desktop/laravel/Library/storage/images/BAF60E78A0952C5C45FF59E7F3D85052.png'
        ]);
    }
}
