<?php
/*
 * Copyright (c) 2020. Marcelo A. Valdez - All Rights Reserved
 */

use Illuminate\Support\Facades\Route;
use Experimental\StorageLink\Http\Controllers\StorageLinkController;


Route::get(config('storage-link.route'), StorageLinkController::class);
