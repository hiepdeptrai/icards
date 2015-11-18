<?php

class Options extends Eloquent {

	protected $table = 'options';
    protected $primaryKey = 'id';

	protected $fillable = array('name');
	
	
}
