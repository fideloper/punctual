<?php namespace Punctual\Storage\Link;

interface LinkInterface {

	public function all();

	public function add(array $data);

	public function getCore();

}