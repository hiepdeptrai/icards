<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('card_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('card_id');
			$table->integer('card_level_id');
			$table->integer('merchant_id');
			$table->integer('value_payment')->default(0);
			$table->integer('discount')->default(0);
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
		Schema::drop('card_options');
	}

}
