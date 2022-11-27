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


Route::get('/work', [WorkController::class, 'index']);
Route::get('/living', [LivingController::class, 'index']);
Route::get('/driving-service', [DrivingServiceController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/care-center', [CareCenterController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);





