<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('id');
            // $table->integer('user_id')->unsigned();
            // $table->integer('post_id')->unsigned();
            $table->foreignId('user_id')->references('id')->on('users');
            // $table->foreign('post_id')->references('id')->on('posts');
            $table->foreignId('post_id')->references('id')->on('posts');
            $table->string('comment_text');
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
        Schema::dropIfExists('comments');
    }
};
