<?php

use App\Http\Controllers\MenuItemController;
use Illuminate\Support\Facades\Route;


Route::get('/',[MenuItemController::class,'home']);
Route::get('/menu',[MenuItemController::class,'menu']);
Route::get('/order',[MenuItemController::class,'order']);
Route::post('/submitform',[MenuItemController::class,'submitform']);