<?php
// v1

use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\Api\v1\PostController;

// v2
use App\Http\Controllers\api\v2\PostController as V2PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// v1 
Route::apiResource('v1/posts', PostController::class)
    ->only('index', 'show', 'destroy');

// v2 
Route::apiResource('v2/posts', V2PostController::class)
    ->only('index', 'show', 'destroy')->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);
