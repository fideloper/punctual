<?php

use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('links', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('url');
			$table->string('title');
			$table->text('description')->nullable();
			$table->boolean('hidden')->default(FALSE);
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
		Schema::drop('links');
	}

}