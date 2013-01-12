<?php namespace Punctual\Storage\Link;

class Eloquent implements LinkInterface {

	private $_core;

	public function __construct()
	{
		$this->_core = new \Link;
	}

	public function all()
	{

	}

	public function getCore()
	{

	}

}