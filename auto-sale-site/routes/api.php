<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/v1/cars', [CarController::class, 'display']);
Route::get('/v1/cars/{car_id}', [CarController::class, 'pinpoint']);
Route::get('/v1/search', [CarController::class, 'search']);
Route::post('/v1/cars', [CarController::class, 'addCar']);
Route::post('/v1/cars/{car_id}/favorite', [CarController::class, 'setFav']);
Route::post('/v1/auth/register', [AuthController::class, 'register']);
Route::post('/v1/auth/login', [AuthController::class, 'login']);
Route::post('/v1/auth/logout', [AuthController::class, 'logout']);
Route::post('/v1/auth/users/{user_id}', [AuthController::class, 'getdetails']);
Route::post('/v1/auth/users/{user_id}/favorites', [AuthController::class, 'getfavorites']);