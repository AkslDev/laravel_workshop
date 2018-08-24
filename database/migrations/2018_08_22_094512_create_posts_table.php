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
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->enum('post_type',['formation','stage']);
            $table->string('titre');
            $table->text('description')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('finished_at');
            $table->float('price', 7, 2);
            $table->integer('max_users');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
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