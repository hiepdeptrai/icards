<?php

class MerchantUsers extends Eloquent {

	protected $table = 'merchant_users';
    protected $primaryKey = 'id';

	protected $fillable = array('user_id', 'merchant_id', 'barcode', 'point', 'level', 'status');
	
	
}
