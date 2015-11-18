<?php

class Cards extends Eloquent {

	protected $table = 'cards';
    protected $primaryKey = 'id';

	protected $fillable = array( 'name');
	
	
}
