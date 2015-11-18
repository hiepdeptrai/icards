<?php

class Feedbacks extends Eloquent {

	protected $table = 'feedbacks';
    protected $primaryKey = 'id';

	protected $fillable = array('user_id', 'deal_id', 'comment', 'point');
	
	
}
