<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('options')->truncate();
		Options::create(array(
			'name'     => 'Lĩnh vực',
		));
		Options::create(array(
			'name'     => 'Tỉnh/Thành Phố',
		));
		Options::create(array(
			'name'     => 'Quận/Huyện',
		));
	}

}