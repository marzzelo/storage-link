<?php
/*
 * Copyright (c) 2020. Marcelo A. Valdez - All Rights Reserved
 */

namespace Experimental\StorageLink;


use Illuminate\Support\ServiceProvider;

class StorageLinkServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . "/../routes/web.php");

		$this->publishes([
			__DIR__ . '/../config/storage-link.php' => base_path('config/storage-link.php'),
		], 'storage-link-config');
	}


	/**
	 * Register any application services.
	 *
	 */
	public function register()
	{
		$this->mergeConfigFrom(__DIR__ . '/../config/storage-link.php', 'storage-link');
	}
}