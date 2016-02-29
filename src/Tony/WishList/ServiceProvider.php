<?php namespace Tony\WishList;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		/*
		$this->app->singleton('wishlist', function($app) {
			return new WishList();
		});
		*/
	}

	public function boot()
	{
		$this->publishes([
			__DIR__.'/src/config.php' => config_path('wishlist.php'),
		], 'config');
	}
}