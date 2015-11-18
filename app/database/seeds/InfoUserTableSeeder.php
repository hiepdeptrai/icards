<?php

class InfoUserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('info_users')->truncate();
	}

}