<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'account' => '89757',
            'password' => Hash::make('12345678'),
            'name' => '林俊杰',
            'class' => '000',
            'speciality' => '000',
            'sex' => '1',
            'phone' => '15922345678',
            'email' => '22345678@qq.com',
            'book_left' => '10',
            'borrowable' => '1',
            'role' => '1'
        ]);
    }
}
