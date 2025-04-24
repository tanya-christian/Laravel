<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourPackageController;

Route::resource('tours', TourPackageController::class);
