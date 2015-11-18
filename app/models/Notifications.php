<?php

class Notifications extends Eloquent {

	protected $table = 'notifications';
    protected $primaryKey = 'id';

	protected $fillable = array( 'merchant_store_id', 'sender', 'recipient', 'description', 'deal_id', 'point', 'type');
	
	
}
