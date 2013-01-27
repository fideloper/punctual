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
	 * [Get /foo]
	 *
	 * @return Response
	 */
	public function index()
	{
		$pagedLinks = $this->_link->paged(Auth::user()->id);

		// Having to do this sucks.
		// Paginator has no JSON support?
		$links = [];

		foreach ( $pagedLinks as $link ) {
			$links[] = $link->toArray();
		}

		return Response::json([
			'error' => false,
			'links' => $links,
			'pagination' => $pagedLinks->links()
			],
			200
		);
	}

	/**
	 * Show the form for creating a new resource.
	 * [GET /foo/create]
	 *
	 * @return Response
	 */
	/*
	public function create()
	{
		//
	}
	*/

	/**
	 * Store a newly created resource in storage.
	 * [POST /foo]
	 *
	 * @return Response
	 */
	public function store()
	{
		// Trololo validation
		$linkId = $this->_link->add([
			'title' => Input::get('title'),
			'url' => Input::get('url'),
			'user_id' => Auth::user()->id,
			'description' => Input::get('description'),
		]);

		return Response::json([
			'error' => false,
			'message' => 'Link created successfully'
			],
			200
		);
	}

	/**
	 * Display the specified resource.
	 * [GET /foo/[id]]
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * [GET /foo/[id]/edit]
	 *
	 * @return Response
	 */
	/*
	public function edit($id)
	{
		//
	}
	*/

	/**
	 * Update the specified resource in storage.
	 * [PUT /foo/[id]]
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * [DELETE /foo/[id]]
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}