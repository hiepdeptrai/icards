<?php

class MerchantStores extends Eloquent {

	protected $table = 'merchant_stores';
    protected $primaryKey = 'id';

	protected $fillable = array('merchant_id', 'name', 'address');
	
	
}
