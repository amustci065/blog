<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::connection('posts')->table('posts_sessions', function (Blueprint $table) {
            $table->string('user_id')->nullable();
        });
    
}

/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('posts')->table('posts_sessions', function (Blueprint $table) {
            $table->dropColumn(['user_id']);
        });
    }
}