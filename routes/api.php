<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\BookController as BookV1;
use App\Http\Controllers\Api\V2\BookController as BookV2;
use App\Http\Controllers\Api\V3\BookController as BookV3;
/*
|--------------------------------------------------------------------------
| API Routes V1
|--------------------------------------------------------------------------
*/


Route::apiResource('v1/books', BookV1::class)
->only(['index','show', 'destroy'])
->middleware('auth:sanctum');

/*
|--------------------------------------------------------------------------
| API Routes V2
|--------------------------------------------------------------------------
*/
Route::apiResource('v2/books', BookV2::class)
->only(['index','show'])
->middleware('auth:sanctum');


/*
|--------------------------------------------------------------------------
| API Routes Login
|--------------------------------------------------------------------------
*/

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);