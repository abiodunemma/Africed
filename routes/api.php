<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MovieController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::post('password/forgot', [ForgotPasswordController::class, 'sendResetLink']);

Route::get('review', [ReviewController::class, 'free']);
Route::get('movie', [MovieController::class, 'free']);
Route::middleware('auth:api')->get('movies/search', [MovieController::class, 'search']);
Route::middleware("auth:api")->group(function(){

    Route::apiResource("movies", MovieController::class);
    Route::apiResource("reviews", ReviewController::class);
});
