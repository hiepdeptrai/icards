<?php

class InfoUsers extends Eloquent {

	protected $table = 'info_users';
    protected $primaryKey = 'id';

	protected $fillable = array('user_id', 'name', 'avatar', 'birthday', 'address', 'city', 'district', 'mobile');
	
	
}
