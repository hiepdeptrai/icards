<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name');
			$table->string('avatar')->nullable();
			$table->integer('birth_day')->nullable();
			$table->integer('birth_month')->nullable();
			$table->integer('birth_year')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('district')->nullable();
			$table->string('mobile')->nullable();
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
		Schema::drop('info_users');
	}

}
