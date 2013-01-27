<?php namespace Punctual\Storage\Link;

interface LinkInterface {

	public function all();

	public function paged($user_id, $limit, $offset=0);

	public function add(array $data);

	public function getCore();

}