<?php namespace Punctual\Storage\User;

interface UserInterface {

	public function all();

	public function getUserByKey($api_key);

	public function getCore();

}