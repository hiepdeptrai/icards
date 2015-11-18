<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('merchants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('logo')->nullable();
			$table->string('color')->nullable();
			$table->integer('field');
			$table->text('info_merchant_owner');
			$table->integer('type')->default(1); // 1 is free, 2 is preminum 1, 3 is premium 2
			$table->integer('status')->default(0); // 1 is invisible, 0 is not invisible
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
		Schema::drop('merchants');
	}

}
