<?php

use Illuminate\Support\Facades\Route;

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
