<?php
/*
 * Copyright (c) 2020. Marcelo A. Valdez - All Rights Reserved
 */

namespace Experimental\StorageLink\Http\Controllers;

use Illuminate\Filesystem\Filesystem;

class StorageLinkController
{
	public function __invoke(Filesystem $filesystem)
	{
		// Artisan::call('storage:link');
		if ($filesystem->exists(public_path('storage'))) {
			return 'El directorio "public/storage" ya existe.';
		}

		$filesystem->link(storage_path('app/public'), public_path('storage'));

		return 'El directorio [public/storage] ha sido enlazado';
	}
}