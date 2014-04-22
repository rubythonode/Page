<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_langs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('page_id')->unique();
			$table->string('heading', 100);
			$table->text('content');
			$table->string('title', 200);
			$table->string('keyword', 200);
			$table->string('description', 200);
			$table->string('image', 50)->nullable();
			$table->text('abstract');
			$table->string('lang', 3);
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
		Schema::drop('page_langs');
	}

}