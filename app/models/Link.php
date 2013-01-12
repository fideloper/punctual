<?php

use Illuminate\Auth\UserInterface;

class Link extends Eloquent {

	protected $table = 'links';

	public function user()
	{
		return $this->belongsTo('User');
	}

}