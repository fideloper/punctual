<?php namespace Punctual\Storage\User;

use Illuminate\Support\ServiceProvider;
use Punctual\Storage\User\Eloquent as UserEloquent;

class UserServiceProvider extends ServiceProvider {

	/**
	 * Register the binding
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$app['user'] = function()
		{
			return new UserEloquent;
		};

		$app->bind('Punctual\Storage\User\UserInterface', 'Punctual\Storage\User\Eloquent');
	}

}