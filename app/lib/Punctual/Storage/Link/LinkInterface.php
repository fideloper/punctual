<?php namespace Punctual\Storage\Link;

interface LinkInterface {

	public function all();

	public function paged($user_id);

	public function add(array $data);

	public function getCore();

}