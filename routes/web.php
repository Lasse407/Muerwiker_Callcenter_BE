<?php

use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CareCenterController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\DrivingServiceController;
use App\Http\Controllers\Api\LivingController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('api/work', WorkController::class);
Route::apiResource('api/living', LivingController::class);
Route::apiResource('api/driving-service', DrivingServiceController::class);
Route::apiResource('api/contact', ContactController::class);
Route::apiResource('api/care-center', CareCenterController::class);
Route::apiResource('api/admin', AdminController::class);










