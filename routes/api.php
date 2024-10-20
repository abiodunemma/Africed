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

// User kyc route //
Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::post('password/forgot', [ForgotPasswordController::class, 'sendResetLink']);

//unauthorized views (without tokens)
Route::get('review', [ReviewController::class, 'free']);
Route::get('movie', [MovieController::class, 'free']);

//Route with midwares and aurhorization(Token needed)
Route::middleware('auth:api')->get('movies/search', [MovieController::class, 'search']);
Route::middleware("auth:api")->group(function(){
    Route::apiResource("movies", MovieController::class);
    Route::apiResource("reviews", ReviewController::class);
});
