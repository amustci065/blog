<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //$table->engine = “InnoDB”;

            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->unique()->references('id')->on('users')->onDelete('restrict');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();   
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
        Schema::dropIfExists('posts');
    }
}
