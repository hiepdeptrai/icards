<?php

class OptionsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('options')->truncate();
		Options::create(array(
			'name'     => 'Lĩnh vực',
		));
		
		//thinh thanh pho
		Options::create(array(
			'name'     => 'Hà Nội',
		));
		Options::create(array(
			'name'     => 'TP. Hồ Chí Minh',
		));
		Options::create(array(
			'name'     => 'An Giang',
		));
		Options::create(array(
			'name'     => 'Bà Rịa Vũng Tàu',
		));
		Options::create(array(
			'name'     => 'Bắc Giang',
		));
		Options::create(array(
			'name'     => 'Bắc Kạn',
		));
		Options::create(array(
			'name'     => 'Bạc Liêu',
		));
		Options::create(array(
			'name'     => 'Bắc Ninh',
		));
		Options::create(array(
			'name'     => 'Bến Tre',
		));
		Options::create(array(
			'name'     => 'Bình Dương',
		));
		Options::create(array(
			'name'     => 'Bình Phước',
		));
		Options::create(array(
			'name'     => 'Bình Thuận',
		));
		Options::create(array(
			'name'     => 'Bình Định',
		));
		Options::create(array(
			'name'     => 'Cà Mau',
		));
		Options::create(array(
			'name'     => 'Cần Thơ',
		));
		Options::create(array(
			'name'     => 'Cao Bằng',
		));
		Options::create(array(
			'name'     => 'Ðà Nẵng',
		));
		Options::create(array(
			'name'     => 'Ðắc Lắc',
		));
		Options::create(array(
			'name'     => 'Ðắk Nông',
		));
		Options::create(array(
			'name'     => 'Ðồng Nai',
		));
		Options::create(array(
			'name'     => 'Ðồng Tháp',
		));
		Options::create(array(
			'name'     => 'Ðiện Biên',
		));
		Options::create(array(
			'name'     => 'Gia Lai',
		));
		Options::create(array(
			'name'     => 'Hà Giang',
		));
		Options::create(array(
			'name'     => 'Hà Nam',
		));
		Options::create(array(
			'name'     => 'Hà Tây',
		));
		Options::create(array(
			'name'     => 'Hà Tĩnh',
		));
		Options::create(array(
			'name'     => 'Hải Dương',
		));
		Options::create(array(
			'name'     => 'Hải Phòng',
		));
		Options::create(array(
			'name'     => 'Hậu Giang',
		));
		Options::create(array(
			'name'     => 'Hoà Bình',
		));
		Options::create(array(
			'name'     => 'Huế',
		));
		Options::create(array(
			'name'     => 'Hưng Yên',
		));
		Options::create(array(
			'name'     => 'Khánh Hoà',
		));
		Options::create(array(
			'name'     => 'Kiên Giang',
		));
		Options::create(array(
			'name'     => 'Kon Tum',
		));
		Options::create(array(
			'name'     => 'Lai Châu',
		));
		Options::create(array(
			'name'     => 'Lâm Ðồng',
		));
		Options::create(array(
			'name'     => 'Lạng Sơn',
		));
		Options::create(array(
			'name'     => 'Lào Cai',
		));
		Options::create(array(
			'name'     => 'Long An',
		));
		Options::create(array(
			'name'     => 'Nam Ðịnh',
		));
		Options::create(array(
			'name'     => 'Nghệ An',
		));
		Options::create(array(
			'name'     => 'Ninh Bình',
		));
		Options::create(array(
			'name'     => 'Ninh Thuận',
		));
		Options::create(array(
			'name'     => 'Phú Thọ',
		));
		Options::create(array(
			'name'     => 'Phú Yên',
		));
		Options::create(array(
			'name'     => 'Quảng Bình',
		));
		Options::create(array(
			'name'     => 'Quảng Nam',
		));
		Options::create(array(
			'name'     => 'Quảng Ngãi',
		));
		Options::create(array(
			'name'     => 'Quảng Ninh',
		));
		Options::create(array(
			'name'     => 'Quảng Trị',
		));
		Options::create(array(
			'name'     => 'Sóc Trăng',
		));
		Options::create(array(
			'name'     => 'Sơn La',
		));
		Options::create(array(
			'name'     => 'Tây Ninh',
		));
		Options::create(array(
			'name'     => 'Thái Bình',
		));
		Options::create(array(
			'name'     => 'Thái Nguyên',
		));
		Options::create(array(
			'name'     => 'Thanh Hóa',
		));
		Options::create(array(
			'name'     => 'Tiền Giang',
		));
		Options::create(array(
			'name'     => 'Trà Vinh',
		));
		Options::create(array(
			'name'     => 'Tuyên Quang',
		));
		Options::create(array(
			'name'     => 'Vĩnh Long',
		));
		Options::create(array(
			'name'     => 'Vĩnh Phúc',
		));
		Options::create(array(
			'name'     => 'Yên Bái',
		));
		
	}

}