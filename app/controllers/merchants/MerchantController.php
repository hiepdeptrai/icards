<?php

/**
* 
*/
class MerchantController extends BaseController
{
	
	public function getTrademarkCard()
	{
		return View::make('merchant.create-trademark-card');
	}

}