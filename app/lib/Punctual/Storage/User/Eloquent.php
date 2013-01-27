<?php namespace Punctual\Storage\User;

class Eloquent implements UserInterface {

	private $_core;

	public function __construct()
	{
		$this->_core = new \User;
	}

	public function all()
	{
		return $this->_core->all();
	}

	public function getUserByKey($api_key)
	{
		// Should this return instances of Laravel\Database\Eloquent?
		// This abstraction might be useless (Does it help switch out sql to nosql for instance?)
		return $this->_core->where('api_key', $api_key)->first();
	}

	public function getCore()
	{

	}

}