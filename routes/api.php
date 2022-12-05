<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(UserController::class)->group(function () {
    Route::post('/users', 'store');
    Route::put('/users', 'update');
    Route::get('/users', 'show');
});
Route::controller(AuthController::class)->group(function () {
    Route::post('/auth', 'login');
});
