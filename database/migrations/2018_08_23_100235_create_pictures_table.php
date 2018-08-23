<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('pictures', function (Blueprint $table) {
			$table->increments(‘id’);
			$table->increments(‘post_id’);
			$table->string(‘title’,100);
			$table->string(‘link’,100);
		});
	}
	
	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('pictures');
	}
}
