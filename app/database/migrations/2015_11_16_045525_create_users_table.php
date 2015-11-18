<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
		    $table->increments('id');
		    $table->string('user_name')->unique();
		    $table->string('email')->unique();
		    $table->string('password');
		    $table->string('password_confirmation')->nullable();
		    $table->integer('active')->default(1);
		    $table->string('accept_token')->nullable();
		    $table->string('remember_token')->nullable();
		    $table->integer('type')->default(3);
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
		Schema::drop('users');
	}

}
