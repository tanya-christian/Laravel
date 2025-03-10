<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[JobController::class,'home']);
Route::get('/jobs',[JobController::class,'jobs']);
Route::get('/apply',[JobController::class,'apply']);

Route::post('/submitform',[JobController::class,'submitform']);