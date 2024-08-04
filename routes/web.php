<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(App\Http\Controllers\UserController::class)->name('auth.')->group(function () {
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/signup', 'signup')->name('signup');
});
Route::controller(App\Http\Controllers\Travel::class)->name('main.')->group(function () {
    Route::get('/home', 'index')->name('index');
    Route::get('/activity', 'activity')->name('activity');
    Route::get('/activity/{id}', 'activityShow')->name('activity.show');
});
Route::get('/', function () {
    return redirect()->route('main.index');
});
