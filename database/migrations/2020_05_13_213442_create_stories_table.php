<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('language');
            $table->integer('level');
            $table->string('title');
            $table->integer('category_id');
            $table->string('image');
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('audio_file');
            $table->integer('views');
            $table->integer('score');
            $table->integer('votes');
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
        Schema::dropIfExists('stories');
    }
}
