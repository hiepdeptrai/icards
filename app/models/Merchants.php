<?php

class Merchants extends Eloquent {

	protected $table = 'merchants';
    protected $primaryKey = 'id';

	protected $fillable = array('name', 'logo', 'color', 'field', 'info_merchant_owner', 'type', 'status');
	
	
}
