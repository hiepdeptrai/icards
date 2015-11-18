<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangePointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('change_points', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('bill_code')->nullable();
			$table->integer('merchant_store_id');
			$table->integer('merchant_id');
			$table->integer('custome_id');
			$table->integer('point')->default(0);
			$table->integer('type')->default(1); // 1 la diem thuong, 2 la doi diem
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
		Schema::drop('change_points');
	}

}
