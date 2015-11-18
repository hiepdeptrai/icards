<?php

class MerchantAccountStores extends Eloquent {

	protected $table = 'merchant_account_stores';
    protected $primaryKey = 'id';

	protected $fillable = array('user_id', 'merchant_store_id');
	
	
}
