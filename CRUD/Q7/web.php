<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuItemController;


Route::resource('items', MenuItemController::class);
