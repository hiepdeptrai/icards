<?php

class OptionValuesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('optionvalues')->truncate();

		//linh vuc
		OptionValues::create(array(
			'option_id' =>1,
			'name'     => 'Cafe',
		));

		OptionValues::create(array(
			'option_id' =>1,
			'name'     => 'Ăn uống',
		));

		OptionValues::create(array(
			'option_id' =>1,
			'name'     => 'Mỹ phẩm',
		));

		OptionValues::create(array(
			'option_id' =>1,
			'name'     => 'Thời trang',
		));

		//quan huyen


		//1.  ha noi
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Ba Đình',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Cầu Giấy',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Gia Lâm',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Hà Đông',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Hai Bà Trưng',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Hoài Đức',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Hoàn Kiếm',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Hoàng Mai',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Long Biên',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Mê Linh',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Sóc Sơn',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Sơn Tây',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Tây Hồ',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Thanh Trì',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Thanh Xuân',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Từ Liêm',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Ứng Hòa',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Đông Anh',
		));
		OptionValues::create(array(
			'option_id'=>2,
			'name'=>'Đống Đa',
		));

		//3. TP Ho Chi Minh
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Bình Chánh',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Bình Tân',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Bình Thạnh',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Cần Giờ',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Củ Chi',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Gò vấp',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Hóc Môn',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'KDC Trung Sơn (Bình Chánh)',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Nhà Bè',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Phú Nhuận',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 1',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 2',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 3',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 4',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 5',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 6',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 7',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 8',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 9',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 10',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 11',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Quận 12',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Tân Bình',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Tân Phú',
		));
		OptionValues::create(array(
			'option_id'=>3,
			'name'=>'Thủ Đức',
		));



	}

}