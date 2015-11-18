<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('merchant_store_id');
			$table->integer('sender');
			$table->integer('recipient');
			$table->text('description');
			$table->integer('deal_id');
			$table->integer('point')->default(0);
			$table->integer('type')->default(1); // 1 la diem thuong, 2 la tin nhan cua he thong
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
		Schema::drop('notifications');
	}

}
