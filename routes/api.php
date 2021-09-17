<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frumbledingle\Api\ItemController;
use App\Http\Controllers\Frumbledingle\Api\ReportController;
use App\Http\Controllers\Frumbledingle\Api\CategoryController;
use App\Http\Controllers\Frumbledingle\Api\LocationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'frumbledingle'], function () {
    Route::resource('locations', LocationController::class)->only(['index', 'store', 'destroy']);
    Route::resource('items', ItemController::class)->only(['index', 'store', 'destroy']);
    Route::resource('categories', CategoryController::class)->only(['index', 'store', 'destroy']);
    Route::resource('report', ReportController::class)->only(['index',]);
});
