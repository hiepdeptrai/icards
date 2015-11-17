<?php

class CustomeController extends BaseController
{
	public function getCard()
	{
		return View::make('custome.create-card');
	}
}