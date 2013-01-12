<?php

use Illuminate\Database\Migrations\Migration;

class CreateLinkTable extends Migration {

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
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('link');
	}

}