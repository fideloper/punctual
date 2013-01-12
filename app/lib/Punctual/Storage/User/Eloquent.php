<?php namespace Punctual\Storage\User;

class Eloquent implements UserInterface {

	private $_core;

	public function __construct()
	{
		$this->_core = new \User;
	}

	public function all()
	{

	}

	public function getCore()
	{

	}

}