<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('merchant_store_id');
			$table->integer('merchant_id');
			$table->string('name');
			$table->text('description');
			$table->datetime('start_day');
			$table->datetime('end_day');
			$table->string('image_avatar');
			$table->text('image_content');
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
		Schema::drop('deals');
	}

}
