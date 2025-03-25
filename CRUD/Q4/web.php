<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyListingController;

Route::resource('properties',PropertyListingController::class);
