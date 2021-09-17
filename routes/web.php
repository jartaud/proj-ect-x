<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frumbledingle\ItemController;
use App\Http\Controllers\Frumbledingle\ReportController;
use App\Http\Controllers\Frumbledingle\CategoryController;
use App\Http\Controllers\Frumbledingle\LocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth.basic');

Route::get('question-1', function () {
    return view('question-1');
})->name('question-1')->middleware('auth.basic');

Route::get('question-2', [\App\Http\Controllers\Question2Controller::class, 'index'])
    ->name('question-2')
    ->middleware('auth.basic');
Route::get('question-3', [\App\Http\Controllers\Question3Controller::class, 'index'])
    ->name('question-3')
    ->middleware('auth.basic');

Route::get('question-5', function () {
    return view('question-5');
})->name('question-5')->middleware('auth.basic');

Route::get('question-6', function () {
    return view('question-6');
})->name('question-6')->middleware('auth.basic');

Route::group(['prefix' => 'frumbledingle'], function () {
    Route::get('/', function () {
        return view('frumbledingle.welcome');
    })->name('frumbledingle.home');

    Route::get('locations', [LocationController::class, 'index'])
        ->name('frumbledingle.locations');
    Route::get('items', [ItemController::class, 'index'])
        ->name('frumbledingle.items');
    Route::get('categories', [CategoryController::class, 'index'])
        ->name('frumbledingle.categories');

    Route::get('report', [ReportController::class, 'index'])
        ->name('frumbledingle.report');
    Route::get('report-pdf', [ReportController::class, 'pdf'])
        ->name('frumbledingle.report-pdf');
});
