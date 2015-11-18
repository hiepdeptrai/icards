<?php

class ChangePoints extends Eloquent {

	protected $table = 'change_points';
    protected $primaryKey = 'id';

	protected $fillable = array( 'bill_code', 'merchant_store_id', 'merchant_id', 'custome_id', 'point', 'type');
	
	
}
