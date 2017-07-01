<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table){
            $table->increments('id');
            $table->string('ISBN')->unique();
            $table->string('author');
            $table->string('name');
            $table->string('kind');
            $table->string('location');
            $table->integer('repertory');
            $table->float('price');
            $table->text('intro');
            $table->integer('hot');
            $table->integer('borrowed_num');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
