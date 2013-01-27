<?php

use Punctual\Storage\Link\LinkInterface;
use Punctual\Storage\User\UserInterface;

class LinksController extends BaseController {

	private $_link;
	private $_user;

	public function __construct(LinkInterface $link, UserInterface $user)
	{
		$this->beforeFilter('apiauth');

		$this->_link = $link;
		$this->_user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$links = $this->_link->paged(Auth::user()->id, 20, 0);

		return Response::json([
			'error' => true,
			'message' => 'Missing or incorrect api key'],
			401
		);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}