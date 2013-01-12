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

	public function add(array $data)
	{
		$this->_core->user_id = $data['user_id'];
		$this->_core->url = $data['url'];
		$this->_core->title = $data['title'];
		$this->_core->description = $data['description'];

		return $this->_core->save();
	}

	public function getCore()
	{

	}

}