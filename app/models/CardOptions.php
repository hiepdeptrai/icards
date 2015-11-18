<?php

class CardOptions extends Eloquent {

	protected $table = 'feedbacks';
    protected $primaryKey = 'id';

	protected $fillable = array('card_id', 'card_level_id', 'merchant_id', 'value_payment', 'discount');
	
	
}
