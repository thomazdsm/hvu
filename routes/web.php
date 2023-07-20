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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/tutor', \App\Http\Controllers\TutorController::class);
Route::resource('/animal', \App\Http\Controllers\AnimalController::class);
Route::resource('/atendimento', \App\Http\Controllers\ServiceTreadmillController::class);
