<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WorkController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CareCenterController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\DrivingServiceController;
use App\Http\Controllers\Api\LivingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/works', [WorkController::class, 'index']);

Route::prefix('/work')->group( function () {
    Route::post('/store', [WorkController::class, 'store']);
    Route::put('/{id}', [WorkController::class, 'update']);
    Route::delete('/{id}', [WorkController::class, 'destroy']);
});

Route::get('/livings', [LivingController::class, 'index']);

Route::prefix('/living')->group( function () {
    Route::post('/store', [LivingController::class, 'store']);
    Route::put('/{id}', [LivingController::class, 'update']);
    Route::delete('/{id}', [LivingController::class, 'destroy']);
});

Route::get('/admins', [AdminController::class, 'index']);

Route::prefix('/admin')->group( function () {
    Route::post('/store', [AdminController::class, 'store']);
    Route::put('/{id}', [AdminController::class, 'update']);
    Route::delete('/{id}', [AdminController::class, 'destroy']);
});

Route::get('/contacts', [ContactController::class, 'index']);

Route::prefix('/contact')->group( function () {
    Route::post('/store', [ContactController::class, 'store']);
    Route::put('/{id}', [ContactController::class, 'update']);
    Route::delete('/{id}', [ContactController::class, 'destroy']);
});
Route::get('/driving-services', [DrivingServiceController::class, 'index']);

Route::prefix('/driving-service')->group( function () {
    Route::post('/store', [DrivingServiceController::class, 'store']);
    Route::put('/{id}', [DrivingServiceController::class, 'update']);
    Route::delete('/{id}', [DrivingServiceController::class, 'destroy']);
});
Route::get('/care-centers', [CareCenterController::class, 'index']);

Route::prefix('/care-center')->group( function () {
    Route::post('/store', [CareCenterController::class, 'store']);
    Route::put('/{id}', [CareCenterController::class, 'update']);
    Route::delete('/{id}', [CareCenterController::class, 'destroy']);
});
