<?php

class OptionValues extends Eloquent {

	protected $table = 'optionvalues';
    protected $primaryKey = 'id';

	protected $fillable = array('option_id', 'name');
	
	
}
