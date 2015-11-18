<?php

class Deals extends Eloquent {

	protected $table = 'deals';
    protected $primaryKey = 'id';

	protected $fillable = array('merchant_store_id', 'merchant_id', 'name', 'description', 'start_day', 'end_day', 'image_avatar', 'image_content');
	
	
}
