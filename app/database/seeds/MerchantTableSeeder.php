<?php

class MerchantTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('merchants')->truncate();
	}

}