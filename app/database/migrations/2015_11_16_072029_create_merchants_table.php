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
			$table->integer('field');
			$table->text('info_merchant_owner');
			$table->integer('type')->default(1);
			$table->integer('status')->default(0);
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
