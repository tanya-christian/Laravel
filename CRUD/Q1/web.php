<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelBookingController;

Route::resource('hotels', HotelBookingController::class);