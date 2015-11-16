<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('merchant_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('merchant_id');
			$table->integer('barcode')->unique();
			$table->integer('card_rating')->nullable();
			$table->integer('point')->default(0);
			$table->integer('status')->default(1);
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
		Schema::drop('merchant_users');
	}

}
