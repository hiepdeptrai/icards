<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->truncate();
		User::create(array(
			'user_name'     => 'Badman',
			'email'    => 'hiep.giap@shoppie.vn',
			'password' => Hash::make('12344321'),
			'type'     => 2,
		));
	}

}