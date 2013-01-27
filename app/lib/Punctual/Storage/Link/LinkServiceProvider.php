<?php namespace Punctual\Storage\Link;

use Illuminate\Support\ServiceProvider;
use Punctual\Storage\Link\Eloquent as LinkEloquent;

class LinkServiceProvider extends ServiceProvider {

	/**
	 * Register the binding
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$app['link'] = function()
		{
			return new LinkEloquent;
		};

		$app->bind('Punctual\Storage\Link\LinkInterface', 'Punctual\Storage\Link\Eloquent');
	}

}