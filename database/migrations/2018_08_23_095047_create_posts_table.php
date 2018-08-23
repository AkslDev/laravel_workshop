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
			$table->increments(‘id’);
			$table->enum(‘post_category’, [‘formation’, stage, ‘divers’])->default(‘divers’);
			$table->string(‘name’,100);
			$table->text(‘description’)->nullable();
			$table->dateTime(‘created_at’)->nullable();
			$table->dateTime(‘finished_at’)->nullable();
			$table->unsignedDecimal(‘price’, 7, 2)->nullable();
			$table->unsignedInteger(‘max_users’)->nullable();
			$table->enum(‘status’, [‘published’, ‘unpublished’])->default(‘unpublished’);
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
