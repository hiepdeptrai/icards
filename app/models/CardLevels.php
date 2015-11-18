<?php

class CardLevels extends Eloquent {

	protected $table = 'feedbacks';
    protected $primaryKey = 'id';

	protected $fillable = array('card_id', 'name');
	
	
}
