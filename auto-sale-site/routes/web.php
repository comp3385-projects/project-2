<?php
use App\Http\Controllers\AuthController;

Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');

Route::post('/register', [AuthController::class, 'register'])->middleware('auth:api');