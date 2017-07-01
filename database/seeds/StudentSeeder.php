<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'account' => '14051814',
            'password' => Hash::make('12345678'),
            'name' => '韩坚豪',
            'class' => '14052314',
            'speciality' => '计算机科学与技术',
            'sex' => '1',
            'phone' => '15932345678',
            'email' => '32345678@qq.com',
            'book_left' => '5',
            'borrowable' => '1',
            'role' => '0'
        ]);
    }
}
