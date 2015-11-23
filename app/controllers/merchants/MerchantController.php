<?php

/**
* 
*/
class MerchantController extends BaseController
{
	
	public function getTrademarkCard()
	{
		$fields = OptionValues::where('option_id',1)->get();

		$arrIdCity = array();
		for ($i=2; $i < 66; $i++) { 
			array_push($arrIdCity, $i);
		}
		$citys = Options::whereIn('id',$arrIdCity)->get();

		return View::make('merchant.create-trademark-card',array(
				'fields'=>$fields,
				'citys'=>$citys
			));
	}

	public function postTrademarkCard()
	{
		echo "<pre>";
		dd(Input::all());
	}

	//ham lay quan huyen tu tinh thanh pho
	public function getDistrict()
	{
		$city_id = Input::get('city_id');
		$district=OptionValues::where('option_id',$city_id)->get();
		return Response::json($district);
	}

}