<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', \App\Http\Controllers\User\UserController::class);

Route::prefix('auth')->group(function () {
    Route::post('login',[\App\Http\Controllers\Auth\AuthController::class,'login']);
    Route::get('login',[\App\Http\Controllers\Auth\AuthController::class,'login']);

    Route::post('register',[\App\Http\Controllers\Auth\AuthController::class,'register']);
    Route::get('register',[\App\Http\Controllers\Auth\AuthController::class,'register']);
});
