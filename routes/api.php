<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/users', [UserController::class, 'index']);
Route::apiResource('/users', UserController::class);

// Route::get('/', function () {
//     return 'API';
// });
