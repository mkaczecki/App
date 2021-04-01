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
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/characters', [\App\Http\Controllers\CharacterController::class, 'index']);
Route::patch('/characters/{character}', [\App\Http\Controllers\CharacterController::class, 'update']);
Route::get('/characters/{character}', [\App\Http\Controllers\CharacterController::class, 'show']);
Route::get('/characters/{character}/edit', [\App\Http\Controllers\CharacterController::class, 'edit']);




Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

