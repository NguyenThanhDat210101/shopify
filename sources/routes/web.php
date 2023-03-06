<?php

use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\HomeController;
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

// Home
Route::group(['controller' => HomeController::class], function () {
    Route::get('/', 'index')->name('home');
});
// Home
Route::group(['controller' => AdminController::class, 'prefix' => 'admins', 'as' => 'admins.'], function () {
    Route::get('/', 'index')->name('index');
});
Route::group(['middleware' => ['auth']], function () {
});
