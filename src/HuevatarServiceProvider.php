<?php namespace Kevindierkx\Huevatar;

use Illuminate\Support\ServiceProvider;

class HuevatarServiceProvider extends ServiceProvider {

	/**
	 * {@inheritdoc}
	 */
	protected $defer = true;

	/**
	 * {@inheritdoc}
	 */
	public function boot()
	{
	    $this->package('kevindierkx/huevatar', 'huevatar', __DIR__);
	}

	/**
	 * {@inheritdoc}
	 */
	public function register()
	{
		$this->app->bindShared('huevatar', function ($app) {
			return new Parser($this->app['config']['huevatar::colors']);
		});
	}

	/**
	 * {@inheritdoc}
	 */
	public function provides()
	{
		return ['huevatar'];
	}

}
